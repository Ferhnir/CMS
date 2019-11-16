@extends('admin.layouts.app')

@section('content')
    <p class="display-1">Page content managment</p>
    <v-divider class="mb-4"></v-divider>
    <v-btn class="ma-2" tile outlined color="success">
        <v-icon left>mdi-plus-thick</v-icon> Add new page
    </v-btn>
    <v-divider class="mt-5"></v-divider>
    <v-simple-table>
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="text-left" style="width: auto;">Name</th>
                    <th class="text-center" style="width: 100px;">Page Order</th>
                    <th class="text-center" style="width: 150px;">Active</th>
                    <th class="text-center" style="width: 150px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->name }}</td>
                    <td class="text-center">
                        <form method="POST" action="./pages/update">
                            @csrf
                            <input name="page_id" value="{{ $page->id }}" type="hidden">                    
                            @include('admin._includes.buttons.vbtntoggle', [
                                'page_id' => $page->id,
                                'tag' => 'page_order',
                                'order_value' => $page->page_order,
                                'first' => $loop->first ? true : false,
                                'last' => $loop->last ? true : false
                            ])
                        </form>
                    </td>
                    <td class="text-center">
                        {{ $page->active ? 'Active' : 'Inactive' }}
                    </td>
                    <td class="text-center">
                        <v-btn tile class="ma-2" href="{{ route('admin.pages.show', ['id' => $page->id ]) }}" icon>
                            <v-icon color="amber">mdi-file-edit-outline</v-icon>
                        </v-btn>
                        <v-btn small color="red lighten-1" href="{{ route('admin.pages.show', ['id' => $page->id ]) }}" icon>
                            <v-icon color="red darken-1">mdi-delete</v-icon>
                        </v-btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </template>
    </v-simple-table>
@endsection