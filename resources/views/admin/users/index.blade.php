<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Roles</title>

    <!-- ✅ Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h3 class="mb-4">Assign Roles to Users</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        @foreach($users as $user)
            <div class="col-12 mb-3">
                <form method="POST"
                      action="{{ route('admin.users.assign-role', $user) }}"
                      class="card shadow-sm">
                    @csrf

                    <div class="card-body">
                        <div class="row align-items-center g-3">

                            <!-- User Name -->
                            <div class="col-md-4">
                                <strong>{{ $user->name }}</strong><br>
                                <small class="text-muted">{{ $user->email }}</small>
                            </div>

                            <!-- Role Select -->
                            <div class="col-md-5">
                                <select name="role" class="form-select">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->name }}"
                                            {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                            {{ ucfirst($role->name) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Save Button -->
                            <div class="col-md-3 text-md-end">
                                <button type="submit" class="btn btn-primary px-4">
                                    Save
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
</div>

<!-- ✅ Bootstrap 5 JS (Bundle includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
