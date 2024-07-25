@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/about/')}}" class="btn btn-success"><< Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">About Information</h5>
                </div>
                <div class="card-body">
                    <form action="{{ url('/dashboard/admin/about/store/') }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio" required>
                            <div class="invalid-feedback">
                                Valid bio is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
                            <div class="invalid-feedback">
                                Valid date of birth is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="social_media" class="form-label">Social Media</label>
                            <input type="text" class="form-control" id="social_media" name="social_media" placeholder="Enter social media link" >
                            <div class="invalid-feedback">
                                Valid social media link is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="art_style" class="form-label">Art Style</label>
                            <input type="text" class="form-control" id="art_style" name="art_style" placeholder="Enter art style" >
                            <div class="invalid-feedback">
                                Valid art style is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating"  placeholder="Enter rating">
                            <div class="invalid-feedback">
                                Valid rating is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="join_date" class="form-label">Join Date</label>
                            <input type="date" class="form-control" id="join_date" name="join_date" required>
                            <div class="invalid-feedback">
                                Valid join date is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" required>
                            <div class="invalid-feedback">
                                Valid country is required.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="live" class="form-label">Live</label>
                            <input type="text" class="form-control" id="live" name="live" placeholder="Enter live status">
                            <div class="invalid-feedback">
                                Valid live status is required.
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="user_id" class="form-label">User_id</label>
                            <select name="user_id" id="" class="form-control">
                                <option value="">Users</option>
                                @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->firstname }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">
                                Valid role ID is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
                            <div class="invalid-feedback">
                                Valid location is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-label">work</label>
                            <input type="text" class="form-control" id="location" name="work" placeholder="Enter location">
                            <div class="invalid-feedback">
                                Valid location is required.
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="photos" class="form-label">Photos</label>
                            <input type="file" class="form-control" id="photos" name="photos">
                            <div class="invalid-feedback">
                                Valid photos are required.
                            </div>
                        </div>
                        <button class="btn btn-success mt-3 w-100" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
