@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else

        <div id="flash_message" style=" display:none;   position: absolute; width: 100%; left: 0px;" class=" alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {{ Session::get('flash_notification.message') }}
        </div>
         @if (!Session::has('flash_notification.important'))
        <script type="text/javascript">
            $('#flash_message').slideDown(500);
     		$('#flash_message').delay(3000).slideUp();
        </script>
        @endif
    @endif
@endif
