@extends('admin.layouts.app')

@section('content')
    <p>This is my pages content.</p>
    <v-btn color="green" href="{{ route('admin.pages.create') }}">Add new page</v-btn>
    <v-simple-table>
        <template v-slot:default>
            <thead>
                <tr>
                    <th class="text-left" style="width: 300px;">Name</th>
                    <th class="text-left" style="max-width: 100px;">Page Order</th>
                    <th class="text-left" style="max-width: 300px;">Nav title</th>
                    <th class="text-left" style="width: auto;">Nav Order</th>
                    <th class="text-center" style="width: 250px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <td>{{ $page->html_id }}</td>
                    <td>{{ $page->page_order }}</td>
                    <td>{{ $page->nav_title ? $page->nav_title : '-' }}</td>
                    <td>{{ $page->nav_order ? $page->nav_order : '-' }}</td>
                    <td class="text-center">
                        <v-btn color="amber" href="{{ route('admin.pages.show', ['id' => $page->id ]) }}">Edit</v-btn>
                        <v-btn color="red lighten-1" href="{{ route('admin.pages.show', ['id' => $page->id ]) }}">Delete</v-btn>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </template>
    </v-simple-table>
@endsection