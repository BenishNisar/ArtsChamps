 <main class="dashboard-main-content">
    <div class="container">
        <h1 class="text-dark mt-4">Welcome to Dashboard</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card dash_card"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/artist/post') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:-40px; background-color: purple;">
                                <b style="color: white; margin-left: 20px;"><u>Posts</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>{{ $users ? count($users) : '0' }}</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_two"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/artist/gallery'
                    ) }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:-40px; background-color: purple;">
                                <b style="color: white; margin-left: 20px;"><u>Gallery</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>{{ $roles ? count($roles) : '0' }}</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card dash_card_three"
                    style="width: 15rem; height: 300px; border: double black; box-shadow: 10px 10px 10px gray;">
                    <a href="{{ asset('dashboard/artist/billing') }}" style="text-decoration: none;">
                        <div class="card-body">
                            <h1 class="card-title text-light" style="margin-top:-40px; background-color: purple;">
                                <b style="color: white; margin-left: 20px;"><u>Billing</u></b>
                            </h1>
                            <h5 style="border: 1px solid black; width: 48px; height: 45px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 11px; background: white; margin-top: 25px; margin-left: -17px; border: 3px solid purple;"
                                class="text-dark">
                                <b>{{ $posts ? count($posts) : '0' }}</b>
                            </h5>
                        </div>
                    </a>
                </div>
            </div>








        </div>
    </div>
 </main>
