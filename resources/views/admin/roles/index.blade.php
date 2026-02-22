<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles & Permissions</title>

    <!-- ✅ Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h3 class="mb-4">Roles & Permissions</h3>

    <div class="row">
        @foreach($roles as $role)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">

                        <!-- Role Name -->
                        <h5 class="card-title text-capitalize
                            {{ $role->name === 'admin' ? 'text-danger' : 'text-primary' }}">
                            {{ $role->name }}
                        </h5>

                        <hr>

                        <!-- Permissions -->
                        <h6 class="fw-semibold mb-2">Permissions</h6>

                        @if($role->permissions->count())
                            <div class="d-flex flex-wrap gap-1">
                                @foreach($role->permissions as $permission)
                                    <span class="badge bg-secondary">
                                        {{ $permission->name }}
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <p class="text-muted mb-0">No permissions assigned</p>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- ✅ Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
