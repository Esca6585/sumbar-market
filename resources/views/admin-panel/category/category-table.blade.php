<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>icon</th>
                <th>{{ __('Img') }}</th>
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name_tm }}</td>
                <td>{{ $category->name_en }}</td>
                <td>{{ $category->name_ru }}</td>
                <td><i class="{{ $category->icon_name }}"></i></td>
                <td><img src="{{ asset($category->image) }}" alt="{{ $category->image }}" width="50px"></td>
                <td>
                    <a href="{{ route(Request::segment(4) . '.show', [ app()->getlocale(), $categoryType, $category->parent ? $category->parent->id : $category->id ] ) }}" class="{{ $category->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $category->parent ? $category->parent->{ 'name_' . app()->getlocale() } : __('Parent Category') }}
                    </a>
                </td>
                <td>@include('admin-panel.category.category-action', [ $categoryType, $category ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $categories->links('layouts.pagination') }}
        </div>
    </div>                                
</div>
