@extends('base')

@section('base-box-log')
<div class="pt-5 container-backgroud background-cover container-backgrond-city background-fixed d-flex align-items-center">
    <div class="bg-white color-black w-50 mx-auto h-max-content bg-section-circle bg-section-circle-bottom-right px-5">
    <h1 class="text-right py-3 pr-0 font-weight-light big-size-font color-black mx-auto">Add article</h1>

    <form method="post" action="/articles" class="w-75 ml-auto" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group d-flex align-items-center justify-content-end">
            <label for="title" class="mr-5">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group d-flex align-items-center justify-content-end">
            <label for="url" class="mr-5">Url:</label>
            <input type="text" class="form-control" id="url" name="url">
        </div>

        <div class="form-group d-flex align-items-center justify-content-end h-4">
            <label for="description" class="mr-5">Description:</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group d-flex align-items-center justify-content-end h-4">
            <label for="content" class="mr-5">Content:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group d-flex align-items-center justify-content-end h-4">
            <input type="file" class="form-control my-3" name="thumbnail">
        </div>

        

        <div class="form-group text-right">
            <button style="cursor:pointer" type="submit" class="btn btn-dark w-50 p-2 my-3">Submit</button>
        </div>

        

    </form>

   

@endsection