@extends('Layout.Dashboard_layout')

@section('AdminContent')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{url('/dashboard/admin/about/')}}" class="btn btn-success">&lt;&lt; Back</a>
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">User Information</h5>
                </div>
                <div class="card-body">

                    <form action="{{ url('/dashboard/admin/about/update', $about->about_id) }}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <input type="text" class="form-control" id="bio" name="bio" value="{{ old('bio', $about->bio) }}" placeholder="Enter bio" required>
                            <div class="invalid-feedback">
                                Valid bio is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $about->date_of_birth) }}" required>
                            <div class="invalid-feedback">
                                Valid date of birth is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="social_media" class="form-label">Social Media</label>
                            <input type="text" class="form-control" id="social_media" name="social_media" value="{{ old('social_media', $about->social_media) }}" placeholder="Enter social media link" required>
                            <div class="invalid-feedback">
                                Valid social media link is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="art_style" class="form-label">Art Style</label>
                            <input type="text" class="form-control" id="art_style" name="art_style" value="{{ old('art_style', $about->art_style) }}" placeholder="Enter art style" required>
                            <div class="invalid-feedback">
                                Valid art style is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="number" class="form-control" id="rating" name="rating" value="{{ old('rating', $about->rating) }}" placeholder="Enter rating" required>
                            <div class="invalid-feedback">
                                Valid rating is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="join_date" class="form-label">Join Date</label>
                            <input type="date" class="form-control" id="join_date" name="join_date" value="{{ old('join_date', $about->join_date) }}" required>
                            <div class="invalid-feedback">
                                Valid join date is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $about->country) }}" placeholder="Enter country" required>
                            <div class="invalid-feedback">
                                Valid country is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="live" class="form-label">Live</label>
                            <input type="text" class="form-control" id="live" name="live" value="{{ old('live', $about->live) }}" placeholder="Enter live status" required>
                            <div class="invalid-feedback">
                                Valid live status is required.
                            </div>
                        </div>


                        <select name="user_id" id="user_id" class="form-control" required>
                            <option value="">Users</option>
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}" {{ old('user_id', $about->user_id) == $item->id ? 'selected' : '' }}>{{ $item->firstname }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Valid user ID is required.
                        </div>



                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $about->location) }}" placeholder="Enter location" required>
                            <div class="invalid-feedback">
                                Valid location is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="work" class="form-label">Work</label>
                            <input type="text" class="form-control" id="work" name="work" value="{{ old('work', $about->work) }}" placeholder="Enter work" required>
                            <div class="invalid-feedback">
                                Valid work is required.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="photos" class="form-label"b>Photos</label>
                            <input type="file" class="form-control" id="photos" name="photos" value="{{ old('photos', $about->photos) }}">
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
</div>
@endsection
