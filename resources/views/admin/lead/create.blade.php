<div class="row">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('leads.store') }}" method="POST" enctype="multipart/form-data">   
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date Time</label>
                            <input type="text" name="date_time" value="{{ old('date_time') }}" id="date-format"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control"
                                id="exampleFormControlInput1" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                            <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                class="form-control" id="exampleFormControlInput1" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                                id="exampleFormControlInput1" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <textarea class="form-control" name="address" cols="10" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Source</label>
                            <input type="text" name="source" value="{{ old('source') }}" class="form-control"
                                id="exampleFormControlInput1" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">FC Name</label>
                            <select name="fc_id" class="form-control" aria-label="Default select example" required>
                                <option disabled selected value>
                                    <- Choose ->
                                </option>
                                @foreach ($fitnessConsultants as $item)
                                    <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Staff Name</label>
                            <select name="cs_id" class="form-control" aria-label="Default select example" required>
                                <option disabled selected value>
                                    <- Choose ->
                                </option>
                                @foreach ($customerServices as $item)
                                    <option value="{{ $item->id }}">{{ $item->full_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('leads.index') }}" class="btn btn-danger">Back</a>
            </form>
        </div>
    </div>
</div>
