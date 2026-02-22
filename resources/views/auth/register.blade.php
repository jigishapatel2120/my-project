<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-md-5">

            <div class="card shadow">
                <div class="card-body p-4">
                    <h3 class="text-center mb-3">Register</h3>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Select Role</label>
                            <select name="role" class="form-select" required>
                                <option value="">-- Select Role --</option>

                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}">
                                        {{ ucfirst($role->name) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </form>

                    <p class="text-center mt-3">
                        Already have account? <a href="{{ route('login') }}">Login</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
