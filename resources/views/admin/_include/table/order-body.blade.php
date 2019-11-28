<div class="btn-group mr-2 gradient-buttons" role="group" aria-label="Second group">
        @include('admin._include.buttons.bttn', [
            'type'          => 'submit',
            'css_class'     => 'btn-info',
            'name'          => 'order',
            'value'         => $orderData->order - 1,
            'icon'          => 'mdi-menu-up',
            'disabled'      => $first
        ])
        @include('admin._include.buttons.bttn', [
            'type'          => 'button',
            'css_class'     => 'btn-outline-secondary',
            'title'         => $orderData->order,
            'disabled'      => true
        ])
        @include('admin._include.buttons.bttn', [
            'type'          => 'submit',
            'css_class'     => 'btn-info',
            'name'          => 'order',
            'value'         => $orderData->order + 1,
            'icon'          => 'mdi-menu-down',
            'disabled'      => $last
        ])
    </div>