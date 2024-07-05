@extends('admin.files.layouts.master')

@section('content')
    <section>
        <section class="d-flex justify-content-between">
            <section><a href="{{ route('admin.file.index') }}" class="btn btn-sm btn-primary">بازگشت</a></section>
            <section>
                <h3>افزودن فایل</h3>
            </section>
        </section>
        <hr class="my-3">
        <section>
            <form action="{{ route('admin.file.store') }}" method="post" enctype="multipart/form-data">
               @csrf 
               <section class="row">
                    <div class="mb-3 col-12 col-sm-6 p-2">
                        <label for="name" class="form-label">file name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            aria-describedby="fileTitle">
                        @error('name')
                            <div id="name" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3 col-12 col-sm-6 p-2">
                        <div class="mb-3">
                           <label for="file" class="form-label">file name</label>
                            <input id="file" type="file" name="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>
                        @error('name')
                        <div id="name" class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="col-12">
                     <button class="btn btn-primary" type="submit">Submit form</button>
                   </div>
                </section>

            </form>

        </section>
    </section>
@endsection
