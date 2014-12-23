<style>
.stepwizard-step p {
    margin-top: 10px;    
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;     
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
    
}

.stepwizard-step {    
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 15px;
}
</style>
<div class="stepwizard">
    <div class="stepwizard-row">
         @foreach ($steps as $step)
        <div class="stepwizard-step">
             @if ($button['name'] === $active)
             <button type="button" class="btn btn-primary btn-circle">{{$step['number']}}</button>
             @else
            <button type="button" class="btn btn-default btn-circle">{{$step['number']}}</button>
            @endif
            <p>{{$step['name']}}</p>
        </div>
        @endforeach
    </div>
</div>
