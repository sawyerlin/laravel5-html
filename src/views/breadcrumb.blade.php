<!-- ToDo: put style to css file -->
<div class="row">

  <div class="col-xs-6">
  @foreach ($crumbs as $crumb)

    <span>{{ $crumb }}</span>
    <span>{{ $seperator }}</span>

  @endforeach
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
  @foreach ($buttons as $button)

    {{-- ToDo: add switch statement --}}
    @if ($button['type'] === 'link')

      {!! link_to_route_with_children($button['route'], _($button['name']), isset($button['datas']) ? $button['datas'] : array(), array('class' => "btn btn-primary btn-large pull-right"), '<span class="glyphicon glyphicon-'.$button['icon'].'" aria-hidden="true"></span>')!!} 

    @elseif ($button['type'] === 'submit')

      {!! Form::submit(_($button['name']), ['class' => 'btn btn-primary btn-large pull-right']) !!} 

    @endif

  @endforeach
  </div>

</div>

<hr></hr>
