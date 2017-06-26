<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>

		<% if $Sections %>
			<% loop $Sections %>
                <% if $Title %>
                    <h1>$Title</h1>
				<% end_if %>
				<% if $Content %>
					$Content
				<% end_if %>
				<% if $Photo %>
					$Photo
				<% end_if %>
			<% end_loop %>
		<% end_if %>
	</article>
		$Form
		$CommentsForm
</div>