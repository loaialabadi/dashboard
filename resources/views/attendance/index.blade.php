@extends('layouts.index')

@section('content')
<h3 class="mt-4">المحاضرات</h3>
<table class="table">
    <thead>
        <tr>
            <th>عنوان المحاضرة</th>
            <th>التاريخ</th>
            <th>الإجراء</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lectures as $lecture)
            <tr>
                <td>{{ $lecture->title }}</td>
                <td>{{ $lecture->date }}</td>
                <td>
                    <a href="{{ route('attendances.create', $lecture->id) }}" class="btn btn-success btn-sm">
                        <i class="fas fa-user-check"></i> تسجيل الحضور
                    </a>
                    <a href="{{ route('teachers.attendances.report', ['teacher' => $teacher->id, 'lecture' => $lecture->id]) }}">
                        عرض تقرير الحضور
                    </a>



                    <a href="{{ route('teachers.attendances.edit', ['teacher' => $lecture->teacher_id, 'lecture' => $lecture->id, 'student' => 0]) }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-edit"></i> تحديث الحضور
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
