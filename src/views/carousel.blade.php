{{-- ToDo: Modify style --}}
 <div id="{{ $id }}" class="carousel slide" data-ride="carousel" style="background-color: purple;">
    
    <ol class="carousel-indicators">
        @for ($index = 0; $index < count($images); $index++) 
            <li data-target="#{{ $id }}" data-slide-to="{{ $index }}" class="{!! $index == 0 ? 'active': '' !!}"/>
        @endfor
    </ol>

    <div class="carousel-inner" role="listbox">
        @for ($index = 0; $index < count($images); $index++)
            <div class="item {!! $index == 0 ? 'active': '' !!}">
                {!! Html::image($images[$index]['Url'], $images[$index]['Title'], array('style' => 'display: block; margin-left: auto; margin-right: auto;')) !!}
                <div class="carousel-caption">
                    {{ $images[$index]['Title'] }}
                </div>
            </div>
        @endfor
    </div>

    <hr style="width: 500px;"></hr>
</div>

{{-- ToDo: Add link --}}
<div>
    <a href="#" class="text-center" style="display:block;"><ins>en savoir plus</ins></a>
</div>
{{-- ToDo: Add buttons --}}
