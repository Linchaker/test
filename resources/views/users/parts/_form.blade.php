<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" required value="{{ old('name') ?? $user->name ?? ''}}">
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" class="form-control" required value="{{ old('phone') ?? $user->phone ?? ''}}">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" required value="">
</div>