<li class="list-group-item">
	<span class="badge">{{ $section->contentItems->count() }}</span>
	<a href="{{ url('category' ,[$section->id]) }}">{{ $section->section_name }}</a>
</li>