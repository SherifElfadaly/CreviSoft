<li class="list-group-item">
	<span class="badge">{{ $section->contentItems->count() }}</span>
	<a href="{{ url('section/blogs/Blog' ,[$section->id]) }}">{{ $section->section_name }}</a>
</li>