@extends('admin.dashboard')

@section('title', 'Payments')

    @push('css')

    @endpush

@section('content')

    <!-- /.card-header -->
    <div class="card-body">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header d-flex justify-content-around">
                        <div>
                            <h1 class="">Edit</h1>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <form action="{{url('/payments/update/'.$payments->id)}}" method="post">
                                @csrf
                                <div class="form-groub">
                                    <label for="payment_amount">Amount</label>
                                    <input type="text"class="form-control" name=payment_amount value="{{$payments->payment_amount}}">
                                </div>
                                @error('payment_amount')
                                    <div>
                                    <span class="text-danger my-2">{{$message}}</span>
                                    </div>
                                @enderror
                                <br>
                                <input type="submit" value="Update" class="btn btn-primary">
                                <a href="{{ route('payments') }}" class="btn btn-secondary"> cancel </a>
                            </form>
                        </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.card-body -->

@endsection

@push('js')

    <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endpush
