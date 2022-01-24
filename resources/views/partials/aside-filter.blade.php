<div class="aside-filter">
    <h3>Meditaties</h3>
    @php 
        $args = array(
            'taxonomy' => 'meditatie-jaar',
            'hide_empty' => false,
            'order' => 'DESC'
        );
        $m_cats = get_terms($args);
    @endphp
    <div class="filter-loop flex flex-row justify-start flex-wrap">
        @foreach($m_cats as $x)
        @php
            $term_link = get_term_link($x->term_id, 'meditatie-jaar');
        @endphp
            
            <a href="{!! $term_link !!}" class="filter-btn @if($cur_term == $x->name) active @endif">{!! $x->name !!}</a>
        @endforeach
    </div>
</div>
