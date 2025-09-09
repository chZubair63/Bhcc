@php
$websitem = 'menu-open';
$websitecmsmanagement = $careersm = 'active';
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Job Applications</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.admin.formheader')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini" style="background-color: #f8f9fa;">
<div class="wrapper">
    @include('layouts.admin.nav')
    @include('layouts.admin.aside')

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid mt-3">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="mb-0">Job Applications</h4>
                    </div>

                    <div class="card-body">
                        <!-- Tab navigation -->
                        <ul class="nav nav-pills mb-3" id="appTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pending-tab" data-toggle="tab" href="#pending" role="tab">Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="approved-tab" data-toggle="tab" href="#approved" role="tab">Approved</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rejected-tab" data-toggle="tab" href="#rejected" role="tab">Rejected</a>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="appTabContent">
                            <!-- Pending Applications -->
                            <div class="tab-pane fade show active" id="pending" role="tabpanel">
                                @if($jobPendingApplications->isEmpty())
                                    <div class="alert alert-success text-center">No pending applications found.</div>
                                @else
                                    <div class="d-flex justify-content-between mb-2 align-items-center">
                                        <div>
                                            <input type="checkbox" id="select-all-pending" class="mr-2"> Select All
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-sm" id="download-pending">
                                                <i class="fas fa-download"></i> Download CVs
                                            </button>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Applicant Name</th>
                                                <th>Email</th>
                                                <th>Experience (In Years)</th>
                                                <th>Phone no</th>
                                                <th>View CV</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="pending-body">
                                            @foreach($jobPendingApplications as $row)
                                                <tr>
                                                    <td><input type="checkbox" class="cv-checkbox cv-pending" data-file="{{ $row->file }}"></td>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->experience }}</td>
                                                    <td>{{ $row->phone_no }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ asset('storage/assets/pdfs/jobapplications/' . $row->file) }}" target="_blank">
                                                            <i class="fas fa-file-alt" style="font-size:30px"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <select class="form-control select2 update-status" data-id="{{ $row->id }}">
                                                            @foreach($statuses as $status)
                                                                <option value="{{ $status->id }}" {{ ($status->id == $row->status_id) ? 'selected' : '' }}>
                                                                    {{ $status->status_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                            <!-- Approved Applications -->
                            <div class="tab-pane fade" id="approved" role="tabpanel">
                                @if($jobApprovedApplications->isEmpty())
                                    <div class="alert alert-success text-center">No approved applications found.</div>
                                @else
                                    <div class="d-flex justify-content-between mb-2 align-items-center">
                                        <div>
                                            <input type="checkbox" id="select-all-approved" class="mr-2"> Select All
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-sm" id="download-approved">
                                                <i class="fas fa-download"></i> Download CVs
                                            </button>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Applicant Name</th>
                                                <th>Email</th>
                                                <th>Experience (In Years)</th>
                                                <th>Phone no</th>
                                                <th>View CV</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="approved-body">
                                            @foreach($jobApprovedApplications as $row)
                                                <tr>
                                                    <td><input type="checkbox" class="cv-checkbox cv-approved" data-file="{{ $row->file }}"></td>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->experience }}</td>
                                                    <td>{{ $row->phone_no }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ asset('storage/assets/pdfs/jobapplications/' . $row->file) }}" target="_blank">
                                                            <i class="fas fa-file-alt" style="font-size:30px"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <select class="form-control select2 update-status" data-id="{{ $row->id }}">
                                                            @foreach($statuses as $status)
                                                                <option value="{{ $status->id }}" {{ ($status->id == $row->status_id) ? 'selected' : '' }}>
                                                                    {{ $status->status_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>

                            <!-- Rejected Applications -->
                            <div class="tab-pane fade" id="rejected" role="tabpanel">
                                @if($jobRejectedApplications->isEmpty())
                                    <div class="alert alert-danger text-center">No rejected applications found.</div>
                                @else
                                    <div class="d-flex justify-content-between mb-2 align-items-center">
                                        <div>
                                            <input type="checkbox" id="select-all-rejected" class="mr-2"> Select All
                                        </div>
                                        <div>
                                            <button class="btn btn-primary btn-sm" id="download-rejected">
                                                <i class="fas fa-download"></i> Download CVs
                                            </button>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Applicant Name</th>
                                                <th>Email</th>
                                                <th>Experience (In Years)</th>
                                                <th>Phone no</th>
                                                <th>View CV</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="rejected-body">
                                            @foreach($jobRejectedApplications as $row)
                                                <tr>
                                                    <td><input type="checkbox" class="cv-checkbox cv-rejected" data-file="{{ $row->file }}"></td>
                                                    <td>{{ $row->id }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->experience }}</td>
                                                    <td>{{ $row->phone_no }}</td>
                                                    <td class="text-center">
                                                        <a href="{{ asset('storage/assets/pdfs/jobapplications/' . $row->file) }}" target="_blank">
                                                            <i class="fas fa-file-alt" style="font-size:30px"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <select class="form-control select2 update-status" data-id="{{ $row->id }}">
                                                            @foreach($statuses as $status)
                                                                <option value="{{ $status->id }}" {{ ($status->id == $row->status_id) ? 'selected' : '' }}>
                                                                    {{ $status->status_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('layouts.admin.foot')
@include('layouts.admin.formfooter')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    const csrfToken = $('meta[name="csrf-token"]').attr('content');

        function bindDownloadBtn(buttonId, checkboxClass) {
            $(buttonId).on('click', function () {
                var selectedFiles = [];
                $(checkboxClass + ':checked').each(function () {
                    selectedFiles.push($(this).data('file'));
                });

                if (selectedFiles.length === 0) {
                    toastr.error('Please select at least one CV to download.');
                    return;
                }
       
                $.ajax({
                    url: '/download_career_cv',
                    method: 'POST',
                    data: {
                        files: selectedFiles,
                        _token: csrfToken
                    },
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function (response) {
                        console.log(response); exit;
                        var blob = new Blob([response]);
                        var link = document.createElement('a');
                        link.href = window.URL.createObjectURL(blob);
                        link.download = selectedFiles.length === 1 ? selectedFiles[0] : "selected_cvs.zip";
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                        window.URL.revokeObjectURL(link.href);
                        if (selectedFiles.length === 1) {
                            toastr.success('CV downloaded successfully.');
                        } else {
                            toastr.success('ZIP file of selected CVs downloaded successfully.');
                        }
                    },
                    
                    error: function (xhr) {
                         console.log(response); exit;  
                        toastr.error('Failed to download CVs. ' + (xhr.responseJSON?.error || ''));
                    }
                });
            });
        }

        $('#select-all-pending').on('click', function () {
            $('.cv-pending').prop('checked', this.checked);
        });
        $('#select-all-approved').on('click', function () {
            $('.cv-approved').prop('checked', this.checked);
        });
        $('#select-all-rejected').on('click', function () {
            $('.cv-rejected').prop('checked', this.checked);
        });

        bindDownloadBtn('#download-pending', '.cv-pending');
        bindDownloadBtn('#download-approved', '.cv-approved');
        bindDownloadBtn('#download-rejected', '.cv-rejected');

      $('.update-status').on('change', function() {
    var dropdown = $(this);
    var applicationId = dropdown.data('id');
    var statusId = dropdown.val();
    
    // Store current value in case we need to revert
    var previousValue = dropdown.data('previous-value');
    dropdown.data('previous-value', statusId);

    $.ajax({
        url: '/update_cv_status',
        method: 'POST',
        data: {
            application_id: applicationId,
            status_id: statusId,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            if(response.success) {
                toastr.success(response.message);
                // Optional: Update UI without refresh
                dropdown.data('previous-value', statusId);
            } else {
                toastr.error(response.message);
                dropdown.val(previousValue);
            }
        },
        error: function(xhr) {
            toastr.error('Server error: ' + xhr.statusText);
            dropdown.val(previousValue);
        }
    });
});
</script>

</body>
</html>
