@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 150px;">
        <h2>A Propos</h2>
        <p style="text-align: justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam sagittis quam quis ultricies tempus. Duis ut placerat est, 
            vel maximus nulla. Duis auctor ligula eget tortor accumsan, efficitur 
            efficitur mi porta. Sed a mollis quam, non hendrerit elit. 
            Mauris venenatis nulla a ullamcorper imperdiet. Proin tristique, 
            lorem nec accumsan ultrices, mi ex ultricies odio, 
            quis sodales diam sapien sed nibh. Ut et lorem vel sem euismod venenatis. 
            Integer maximus eget ante vel pulvinar. Vestibulum vel justo eros.<br><br>

            Suspendisse porta viverra mi et interdum. Nunc mi tellus, 
            bibendum at congue ac, eleifend a est. Donec venenatis ac erat vitae sagittis. 
            Donec ullamcorper enim sem, at efficitur sapien porta et. Sed lorem erat, 
            varius sed tellus vitae, iaculis egestas velit. Aliquam tincidunt venenatis 
            convallis. Nulla quis quam augue. Sed ut pretium sem. Suspendisse elit augue, 
            venenatis at felis quis, suscipit luctus sem. Duis purus dui, 
            laoreet sit amet diam eu, efficitur ullamcorper orci. Ut leo lacus, 
            viverra nec iaculis non, tempor eu velit.
        </p>
        <p style="text-align: justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam sagittis quam quis ultricies tempus. Duis ut placerat est, 
            vel maximus nulla. Duis auctor ligula eget tortor accumsan, efficitur 
            efficitur mi porta. Sed a mollis quam, non hendrerit elit. 
            Mauris venenatis nulla a ullamcorper imperdiet. Proin tristique, 
            lorem nec accumsan ultrices, mi ex ultricies odio, 
            quis sodales diam sapien sed nibh. Ut et lorem vel sem euismod venenatis. 
            Integer maximus eget ante vel pulvinar. Vestibulum vel justo eros.<br><br>

            Suspendisse porta viverra mi et interdum. Nunc mi tellus, 
            bibendum at congue ac, eleifend a est. Donec venenatis ac erat vitae sagittis. 
            Donec ullamcorper enim sem, at efficitur sapien porta et. Sed lorem erat, 
            varius sed tellus vitae, iaculis egestas velit. Aliquam tincidunt venenatis 
            convallis. Nulla quis quam augue. Sed ut pretium sem. Suspendisse elit augue, 
            venenatis at felis quis, suscipit luctus sem. Duis purus dui, 
            laoreet sit amet diam eu, efficitur ullamcorper orci. Ut leo lacus, 
            viverra nec iaculis non, tempor eu velit.
        </p>

        <div class="videos d-flex justify-content-between align-items-center mt-5">
            <div class="vid1">
                <iframe src="https://www.youtube.com/embed/1GfN2a68ts8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="container">
                    <h5>L'histoire de Black Lives Matter
                    </h5>
                </div>
            </div>

            <div class="vid2">
                <iframe src="https://www.youtube.com/embed/KLqcE8elvMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="container">
                    <h5>Deux Amérique face à face
                    </h5>
                </div>
            </div>

            <div class="vid3">
                <iframe src="https://www.youtube.com/embed/s4HAnZ_EUuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="container">
                    <h5>All VS Black Lives Matter
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endsection