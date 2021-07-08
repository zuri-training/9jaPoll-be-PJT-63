<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidates</title>
</head>
<body>

    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <h3>Create Candidate Profile</h3>
    <form name="candidate" method="POST" action="{{url('store-form')}}" enctype="multipart/form-data">
        @csrf

        <input type="text" name="cand_name" value="" placeholder="Candidate name" required>
        <input type="date" name="DOB" value="" placeholder="Birth date" required>
        <input type="number" name="age" value="" placeholder="Age" required>
        <input type="text" name="gender" value="" placeholder="Gender" required>
        <input type="text" name="marital_status" value="" placeholder="Marital Status" required>
        <input type="text" name="occupation" value="" placeholder="Occupation" required>
        <input type="text" name="post" value="" placeholder="Post" required>
        <input type="text" name="prev_post" value="" placeholder="Previous Posts">
        <input type="text" name="degrees_obtained" value="" placeholder="Degree Obtained" required>
        <input type="text" name="honours" value="" placeholder="Honours">
        <input type="text" name="schools_attended" value="" placeholder="Schools" required>
        <input type="text" name="awards" value="" placeholder="Award">
        <input type="text" name="party" value="" placeholder="Party" required>
        <input type="text" name="wiki_link" value="" placeholder="Wiki link to bio">
        <input type="text" name="other_links" value="" placeholder="Other_links to bio">
        <input type="text" name="facebook" value="" placeholder="Facebook">
        <input type="text" name="twitter" value="" placeholder="Twitter">
        <input type="text" name="instagram" value="" placeholder="Instagram">
        <input type="text" name="post_type" value="" placeholder="Post type">
        <input type="file" id="profile_image" name="profile_image" required="required">
        {{-- <input type="file" id="party_logo" name="party_logo" required="required"> --}}
        <br/><br/>
        <textarea name="text_content" class="form-control" cols="50" rows="30" required="required"></textarea>

        <button type="submit" class="btn btn-primary">Add Profile</button>
    </form>
    <br/>
    <a href="logout.php">Logout</a>
</body>
</html>