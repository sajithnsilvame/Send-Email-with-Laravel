<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">





    <title>Contact-us</title>

</head>
<body>

        <div>

                <h1>Contact us</h1>

                <form action="{{ route('send.email') }}" method="post">
                    @csrf
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}">
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="50" rows="8">{{ old('message') }}</textarea>
                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button class="mt-3 mb-lg-5" type="submit">Send</button>
                </form>

        </div>

</body>
</html>
