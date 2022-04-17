@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        </ul>
    </div>
@endif