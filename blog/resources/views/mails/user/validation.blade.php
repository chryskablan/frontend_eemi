<p>
    Veuillez valider votre profil BLM en cliquant sur ce
    <a href="{{ route('user.validate', ['user_id' => $user->id, 'token' => $user->validate_token]) }}">lien</a>
</p>
