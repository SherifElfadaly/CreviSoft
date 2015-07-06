<!-- CATEGORIES START -->
<h2 class="no-top-space">Categories</h2>
<ul class="list-group">
	{!! \CMS::sections()->getSectionTree('Categories', 'templates.categories.category_template', \Lang::locale()) !!}
</ul>
<!-- CATEGORIES END -->