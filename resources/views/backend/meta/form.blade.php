<div class="box-body">
    @if(old('route'))
        @php($route_list = [old('route') => trans('routes.' . old('route'))])
    @else
        @php($route_list = isset($meta) ? [$meta->route => trans('routes.' . $meta->route)] : [])
    @endif

    {!! form_row('autocomplete', 'route', [
        'required' => true,
        'title' => trans('validation.attributes.route'),
        'placeholder' => trans('labels.placeholders.route'),
        'label_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
        'options' => $route_list,
        'ajax_url' => route('admin.routes.search'),
        'minimum_input_length' => 2,
        'item_value' => 'name',
        'item_label' => 'uri',
    ]) !!}

    {!! form_row('text', 'title', [
        'title' => trans('validation.attributes.title'),
        'label_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
    ]) !!}

    {!! form_row('textarea', 'description', [
        'title' => trans('validation.attributes.description'),
        'label_class' => 'col-lg-3',
        'field_wrapper_class' => 'col-lg-9',
    ]) !!}
</div>