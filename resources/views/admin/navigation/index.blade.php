@extends('admin.layouts.app')

@section('content')
    <p class="display-1">Navigation content managment</p>
    <v-divider class="mb-4"></v-divider>
    <v-btn class="ma-2" tile outlined color="success">
        <v-icon left>mdi-plus-thick</v-icon> Add new element
    </v-btn>
    <v-divider class="mt-5"></v-divider>
    <v-simple-table>
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="text-left" style="width: 300px;">Name</th>
                    <th class="text-center" style="width: auto;">Nav Order</th>
                    <th class="text-left" style="width: 100px;">Active</th>
                    <th class="text-center" style="width: 250px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($navigation as $el)
                <tr>
                    <td>{{ $el->html_id }}</td>
                    <td class="text-center">
                        @include('admin._includes.buttons.vbtntoggle', [
                            'page_id' => $el->id,
                            'tag' => 'page_order',
                            'order_value' => $el->page_order
                        ])
                    </td>
                    <td>{{ $el->nav_title ? $el->nav_title : '-' }}</td>
                    <td class="text-center">
                        @include('admin._includes.buttons.vbtntoggle', [
                            'page_id' => $el->id,
                            'tag' => 'nav_order',
                            'order_value' => $el->nav_order
                        ])                        
                    </td>
                    <td>{{ $el->active ? 'Yes' : 'No' }}</td>
                    <td class="text-center">
                        <v-btn tile class="ma-2" href="{{ route('admin.pages.show', ['id' => $el->id ]) }}" icon>
                            <v-icon color="amber">mdi-pencil</v-icon>
                        </v-btn>
                        <v-btn small color="red lighten-1" href="{{ route('admin.pages.show', ['id' => $el->id ]) }}" icon>
                            <v-icon color="red darken-1">mdi-delete</v-icon>
                        </v-btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </template>
    </v-simple-table>
@endsection