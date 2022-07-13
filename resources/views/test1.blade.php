<div style="font-family: sans-serif;">
    <h2>
        Hello, this is the first test page.
    </h2>

        <!-- To get current URL's -->
        <h4>
            {{URL::current()}}
        </h4>

        <!-- To get Full URL's having filters etc. -->
        <h4>
            {{URL::full()}}
        </h4>
    
        <!-- To generate route URL's  -->
        <a href="{{URL::to('/about')}}">
            About
        </a>
    
        <a href="{{URL::to('/')}}">
            Welcome
        </a>
    
        <!-- To get previous URL -->
        <h4>
            {{URL::previous()}}
        </h4>

        <!-- Actual uses - Form actions -->
        <form action="{{URL::to('/about')}}" method="get">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="submit" value="Submit">
        </form>
</div>