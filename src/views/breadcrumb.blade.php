<!-- ToDo: put style to css file -->
<div class="row">

  <div class="col-xs-6">
  @foreach ($crumbs as $crumb)

    <span>{{ $crumb }}</span>
    <span>{{ $seperator }}</span>

  @endforeach
  </div>

  <div class="col-xs-6 text-right">
  @foreach ($buttons as $button)

    {{-- ToDo: add switch statement --}}
    @if ($button['type'] === 'link')

      {!! link_to_route_with_children($button['route'], _($button['name']), isset($button['datas']) ? $button['datas'] : array(), array('class' => 'btn btn-primary btn-large', 'role' => 'button'), '<span class="glyphicon glyphicon-'.$button['icon'].'" aria-hidden="true"></span>') !!} 

    @elseif ($button['type'] === 'submit')

      {!! Form::submit(_($button['name']), ['class' => 'btn btn-primary btn-large', 'role' => 'button']) !!} 

    @elseif ($button['type'] === 'toggle')
      
      {!! link_to_toggle_with_children($button['id'], _($button['name']), array('class' => 'btn btn-primary btn-large', 'role' => 'button'), '<span class="glyphicon glyphicon-'.$button['icon'].'" aria-hidden="true"></span>') !!} 

    @endif

  @endforeach
  </div>

</div>

<hr></hr>
