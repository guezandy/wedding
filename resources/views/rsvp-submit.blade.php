<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
          <title>T&A</title>
          <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
      <div class="container my-5">
        <h3>{{$rsvp->greeting}}</h3>
        <form method="POST" action="/rsvp">
          @csrf
          <input name="id" value="{{$rsvp->id}}" hidden>
          <h4>Please confirm the details below</h4>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input name="name" class="form-control" value="{{$rsvp->name}}">
            <div class="form-text">No typos here?</div>
          </div>
          <div class="mb-3">
            <label for="guestCount" class="form-label">Guest count</label>
            <input name="guestCount" class="form-control" value="{{$rsvp->guestCount}}" type="number">
            <div class="form-text">Will you be bringing someone?</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Additional guest names</label>
            <input name="additional_guests" class="form-control" value="{{$rsvp->additional_guests}}">
            <div class="form-text">Include all your guests</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Your address</label>
            <input name="address" class="form-control" value="{{$rsvp->address}}">
            <div class="form-text">To send the invite!</div>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="traveling" checked="{{$rsvp->traveling}}">
            <label class="form-check-label">Will you be traveling and interested in joining hotel block?</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </body>
</html>



              <form class="five" style="display: none">
                <label for="title">Enter name</label>
                <input id="name"
                    name="name"
                    type="text"
                    vale="abc"
                    class="@error('title') is-invalid @enderror">
                <button id="check-rsvp" type="submit">Confirm RSVP</button>
              </form>
              @if(isset($rsvp_confirmation) && $rsvp_confirmation)
                YOU ARE CONFIRMED
              @endif
              <h3 id="rsvp-not-found" style="visibility: hidden">Your name was not found, perhaps try a nickname or a guest name</h3>
              <label id="list-label" style="visibility: hidden">Is this you?</label>
              <div id="list-of-rsvp"></div>



                      <script>
          document.querySelector('.four').addEventListener('click', (e) => {
            e.preventDefault();
            document.querySelector('.five').style.visibility = 'visible';
          });
          document.querySelector('#check-rsvp').addEventListener('click', (e) => {
            e.preventDefault();
            fetch("{{ route('rsvp-entry.post') }}", {
              method: 'post',
              body: JSON.stringify({name: document.querySelector('#name').value}),
              headers: {
                  'Accept': 'application/json',
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': "{{ csrf_token() }}"
              }
            }).then((response) => {
                return response.json()
            }).then((res) => {
                document.querySelector('#rsvp-not-found').style.visibility = 'hidden';
                document.querySelector('#list-label').style.visibility = 'visible';

                const list = document.querySelector('#list-of-rsvp');
                const listItem = document.createElement('a');
                listItem.innerText = res['name'];
                listItem.href = "/rsvp-confirm/"+res['id'];
                list.innerHTML = ''
                list.append(listItem);
            }).catch((error) => {
                console.log('error', error)
                document.querySelector('#rsvp-not-found').style.visibility = 'visible';
                document.querySelector('#list-label').style.visibility = 'hidden';

                const list = document.querySelector('#list-of-rsvp');
                list.innerHTML = '';
            })
          });
        </script>