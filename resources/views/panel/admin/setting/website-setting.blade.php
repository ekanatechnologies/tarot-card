@extends('panel.admin.layout.app')
@section('page_header','Settings')
@section('main')
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="{{route('admin.website-settings')}}" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-header">Website Settings</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 co-xs-12 xol-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="field_website_name">Website Name</label>
                                    <input name="field_website_name" class="form-control @error('field_website_name') field_website_name @enderror" type="text" placeholder="Website Name">
                                    @error('field_website_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 co-xs-12 xol-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="field_website_logo">Logo</label>
                                    <input name="field_website_logo" class="form-control @error('field_website_logo') field_website_logo @enderror" type="file" placeholder="Logo">
                                    @error('field_website_logo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 co-xs-12 xol-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="field_website_email">Email</label>
                                    <input name="field_website_email" class="form-control @error('field_website_email') field_website_email @enderror" type="email" placeholder="Email">
                                    @error('field_website_email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 co-xs-12 xol-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="field_website_phone">Phone</label>
                                    <input name="field_website_phone" class="form-control @error('field_website_phone') field_website_phone @enderror" type="tel" maxlength="10" placeholder="Phone">
                                    @error('field_website_phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 co-xs-12 xol-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <label for="field_website_address">Address</label>
                                    <textarea name="field_website_address" class="form-control @error('field_website_address') field_website_address @enderror" placeholder="Address"></textarea>
                                    @error('field_website_address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-md float-end">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                {{json_encode(Session::all())}}
            </div>
        </div>
    </div>
@endsection
@section('page_script')
    <script>
        $( document ).ready(function() {
            // $("#table_1").dataTable();
        });
    </script>
@endsection
