@extends('admin.layouts.app')

@section('content')
<v-form ref="form">
    <p class="display-1">Edit content</p>
    <v-divider></v-divider>
    <v-card width="100%" class="mt-5">
        <v-card-title>
            Page #ID
        </v-card-title>
        <v-row>
            <v-col col="5">
                <v-card-text>
                    <v-text-field label="Title" value="{{ $page->html_tag }}"></v-text-field>
                </v-card-text>
            </v-col>
            <v-col col="2">                
                <v-card-title>
                    <v-switch label="Active" value="{{ $page->active ? true : false }}"></v-switch>
                </v-card-title>
            </v-col>
        </v-row>
        <v-divider class="ml-4 mr-4"></v-divider>
        <v-card-title>
            Page #Content
        </v-card-title>
    </v-card>
</v-form>
@endsection