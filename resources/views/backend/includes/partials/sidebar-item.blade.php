@if(!empty($item->children))
<li  @if(isActiveMenuItem($item)) aria-expanded="true" @else aria-expanded="false" @endif class="list-group-item  flex-lb-between" ><span><i class="fa {{ @$item->icon }}" aria-hidden="true"></i><span class="responsive"> &nbsp; {{ $item->name }}</span></span><i class="fa fa-angle-left lb-rotate responsive" aria-hidden="true"></i></li>
      <div class="child" style="@if(isActiveMenuItem($item)) display: block; @else display: none; @endif">
            <ul class="list-group" style="background-color: #eee;">
              {{ renderMenuItems($item->children) }}
            </ul>
      </div>
@else
<li aria-expanded="{{ isActiveMenuItem($item) ? 'true' : 'false' }}"><a href="{{ getRouteUrl($item->url, $item->url_type) }}" @if(!empty($item->open_in_new_tab) && ($item->open_in_new_tab == 1)) {{ 'target="_blank"' }} @endif class="list-group-item"  aria-expanded="{{ isActiveMenuItem($item) ? 'true' : 'false' }}"><i class=" fa {{ @$item->icon }}" aria-hidden="true"></i><span class="responsive"> &nbsp; {{ $item->name }}</span></a></li>
@endif
