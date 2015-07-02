<ul class="pagination">
	<li>
		<a 
		href="{{ $contents->previousPageUrl() }}"
		@if($contents->previousPageUrl() == null)
		class="btn disabled"
		@endif
		>
		Prev
		</a>
	</li>
	@for($i = 1 ; $i <= $contents->lastPage() ; $i++)
		<li 
		@if($contents->currentPage() == $i)
			class="active"
		@endif
		>
			<a 
			href ="{{ $contents->url($i) }}"
			>
				{{ $i }}
			</a>
		</li>
	@endfor
	<li>
		<a
		href="{{ $contents->nextPageUrl() }}"
		@if($contents->previousPageUrl() == null)
		class="btn disabled"
		@endif
		>
		Next
		</a>
	</li>
</ul>