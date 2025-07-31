<div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $event->title ?? '') }}" required>
</div>

<div class="form-group">
    <label>Description</label>
    <textarea name="description" class="form-control" required>{{ old('description', $event->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <label>Date</label>
    <input type="date" name="date" class="form-control" value="{{ old('date', $event->date ?? '') }}" required>
</div>

<div class="form-group">
    <label>Time</label>
    <input type="time" name="time" class="form-control" value="{{ old('time', $event->time ?? '') }}">
</div>

<div class="form-group">
    <label>Location</label>
    <input type="text" name="location" class="form-control" value="{{ old('location', $event->location ?? '') }}">
</div>
