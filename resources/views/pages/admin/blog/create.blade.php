@extends('layouts.default_auth')
@push('css')
    <link rel="stylesheet" href="{{ versionResource('assets/admin/css/file/filepond.css') }}" type="text/css"
        as="style" />
    <link rel="stylesheet" href="{{ versionResource('assets/admin/css/file/filepond-preview.css') }}" type="text/css"
        as="style" />
@endpush
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm bài viết
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data"
                            id="post">
                            @csrf
                            <div class="form-group @error('blog_title') has-error @enderror">
                                <label for="exampleInputEmail1">Tên bài viết</label>
                                <input type="text" name="blog_title" class="input-control"
                                    placeholder="Điền tên bài viết" 
                                    value="{{ old('blog_title') }}">
                                @error('blog_title')
                                    <div class="alert-error"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group @error('blog_image') has-error @enderror">
                                <label for="exampleInputEmail1">Hình ảnh bài viết</label>
                                <input type="file" name="blog_image" class="filepond">
                                @error('blog_image')
                                    <div class="alert-error"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="form-group @error('post_desc') has-error @enderror">
                                <label for="exampleInputPassword1">Tóm tắt bài viết</label>
                                <textarea name="post_desc" class="textarea-control" rows="3" placeholder="Điền tóm tắt bài viết">
                            {{ old('post_desc') }}
                            </textarea>
                                @error('post_desc')
                                    <div class="alert-error"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div> --}}
                            <div class="form-group @error('blog_content') has-error @enderror">
                                <label for="exampleInputPassword1">Nội dung bài viết</label>
                                <textarea name="blog_content" class="textarea-control" id="editor" placeholder="Điền nội dung bài viết">
                                {{ old('blog_content') }}
                            </textarea>
                                @error('blog_content')
                                    <div class="alert-error"><i class="fas fa-exclamation-circle"></i> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="primary-btn-submit">Thêm bài viết</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ versionResource('assets/admin/js/ckeditor/ckeditor.min.js') }}" defer></script>
    <script src="{{ versionResource('assets/admin/js/ckeditor/ckeditor-custom.min.js') }}" defer></script>
    <script src="{{ versionResource('assets/admin/js/file/filepond.js') }}" defer></script>
    <script src="{{ versionResource('assets/admin/js/file/filepond-preview.js') }}" defer></script>
    <script src="{{ versionResource('assets/admin/js/file/handle-file.js') }}" defer></script>
    <script type="text/javascript">
        var url_file_process = "{{ route('file.process') }}";
        var url_file_revert = "{{ route('file.revert') }}";
        var url_file_destroy_content = "{{ route('file.destroy_content') }}";
    </script>
@endpush