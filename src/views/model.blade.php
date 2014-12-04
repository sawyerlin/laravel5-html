<div class="modal fade" id="modal-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-3">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">{{ $title }}</h4>
          </div>
          {{-- The template shoud contains modal-body and modal-footer div elements --}}
          @include($template, ['brand' => $data])
          <div class="clearfix"></div>
      </div>
  </div>
</div>
