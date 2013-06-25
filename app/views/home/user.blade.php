Hello, "{{{ $user->name }}}"!

You have been created {{{ $user->created_at->year }}}.

<input type="text" name="email" value="{{{ $user->email }}}">
{{ Form::text('email', $user->email) }}