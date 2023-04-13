@extends('main')
@section('style')
    <style>
        .card{
            transition: 500ms;
            border: none;
        }
        .card:hover {
            box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width: 200px;">

                    <div class="card-body">
                        <img class="center" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iNzAiIGhlaWdodD0iNzAiIHZpZXdCb3g9IjAgMCA3MCA3MCI+PGRlZnM+PHBhdGggaWQ9ImEiIGQ9Ik00IDBoNjFjNCAwIDUgMSA1IDV2NjBjMCA0LTEgNS01IDVINGMtMyAwLTQtMS00LTVWNWMwLTQgMS01IDQtNXoiLz48bGluZWFyR3JhZGllbnQgaWQ9ImMiIHgxPSIxMDAlIiB4Mj0iMCUiIHkxPSIwJSIgeTI9IjEwMCUiPjxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNEQTk1NkIiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNDQzcwMzkiLz48L2xpbmVhckdyYWRpZW50PjxwYXRoIGlkPSJkIiBkPSJNNTYuMjQzIDUyLjI3OWMuNTc4IDAgMS4wNS41MzcgMS4wNSAxLjE5M3YuOTc4YzAgLjY1Ni0uNDcyIDEuMTk0LTEuMDUgMS4xOTRIMTMuNTMyYy0uNTc4IDAtMS4wNS0uNTM4LTEuMDUtMS4xOTR2LTM1LjhjMC0uNjU3LjQ3Mi0xLjE5NCAxLjA1LTEuMTk0aDEuNWMuNTc4IDAgMS4wNS41MzcgMS4wNSAxLjE5NHYzMy42MjloNDAuMTYxek0zOSAyMy4wMjVsNC45ODEgNC45NjMtNi4zMDIgNy4yNS00Ljg2Ni01LjUzYy0uNDExLS40NjctMS4wNjgtLjQ2Ny0xLjQ4IDBMMjAuOTIgNDEuNDIzYTEuMzEgMS4zMSAwIDAgMC0uMDE4IDEuNjhsMi40OTQgMi45MjRjLjQxMi40NzcgMS4wODYuNDg3IDEuNDk3LjAxbDcuMTg2LTguMTY1IDQuODU3IDUuNTJhLjk2NS45NjUgMCAwIDAgMS40ODggMGw5LjU1OC0xMC44Nkw1MyAzNy42NjQgNTUgMjBsLTE2IDMuMDI1eiIvPjxwYXRoIGlkPSJlIiBkPSJNNTYuMjQzIDUwLjI3OWMuNTc4IDAgMS4wNS41MzcgMS4wNSAxLjE5M3YuOTc4YzAgLjY1Ni0uNDcyIDEuMTk0LTEuMDUgMS4xOTRIMTMuNTMyYy0uNTc4IDAtMS4wNS0uNTM4LTEuMDUtMS4xOTR2LTM1LjhjMC0uNjU3LjQ3Mi0xLjE5NCAxLjA1LTEuMTk0aDEuNWMuNTc4IDAgMS4wNS41MzcgMS4wNSAxLjE5NHYzMy42MjloNDAuMTYxek0zOSAyMS4wMjVsNC45ODEgNC45NjMtNi4zMDIgNy4yNS00Ljg2Ni01LjUzYy0uNDExLS40NjctMS4wNjgtLjQ2Ny0xLjQ4IDBMMjAuOTIgMzkuNDIzYTEuMzEgMS4zMSAwIDAgMC0uMDE4IDEuNjhsMi40OTQgMi45MjRjLjQxMi40NzcgMS4wODYuNDg3IDEuNDk3LjAxbDcuMTg2LTguMTY1IDQuODU3IDUuNTJhLjk2NS45NjUgMCAwIDAgMS40ODggMGw5LjU1OC0xMC44Nkw1MyAzNS42NjQgNTUgMThsLTE2IDMuMDI1eiIvPjwvZGVmcz48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxtYXNrIGlkPSJiIiBmaWxsPSIjZmZmIj48dXNlIHhsaW5rOmhyZWY9IiNhIi8+PC9tYXNrPjxnIG1hc2s9InVybCgjYikiPjxwYXRoIGZpbGw9InVybCgjYykiIGQ9Ik0wIDBINzBWNzBIMHoiLz48cGF0aCBmaWxsPSIjRkZGIiBmaWxsLW9wYWNpdHk9Ii4zODMiIGQ9Ik00IDFoNjFjMi42NjcgMCA0LjMzMy42NjcgNSAyVjBIMHYzYy42NjctMS4zMzMgMi0yIDQtMnoiLz48cGF0aCBmaWxsPSIjMzkzOTM5IiBkPSJNNDUuMjQzIDY5SDRjLTIgMC00LS4xNDYtNC00LjA3N1YzNS4zMTVMMTMgMTZoM3YyNi41bDE1LTE0LjI3Ljk3NC4wMjRMNDAgMjEuMDk2bDEzIDE0LjI3LTE4IDE4LjM0NmgyMkw0NS4yNDMgNjl6IiBvcGFjaXR5PSIuMzI0Ii8+PHBhdGggZmlsbD0iIzAwMCIgZmlsbC1vcGFjaXR5PSIuMzgzIiBkPSJNNCA2OWg2MWMyLjY2NyAwIDQuMzMzLTEgNS0zdjRIMHYtNGMuNjY3IDIgMiAzIDQgM3oiLz48dXNlIGZpbGw9IiMwMDAiIGZpbGwtcnVsZT0ibm9uemVybyIgb3BhY2l0eT0iLjMiIHhsaW5rOmhyZWY9IiNkIi8+PHVzZSBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9Im5vbnplcm8iIHhsaW5rOmhyZWY9IiNlIi8+PC9nPjwvZz48L3N2Zz4=" alt="">
                    </div>
                    <div class="card-footer">
                        <h4>hell</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">This is the content of card 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">This is the content of card 3.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">This is the content of card 4.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 5</h5>
                        <p class="card-text">This is the content of card 5.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzAiIGhlaWdodD0iNzAiIHZpZXdCb3g9IjAgMCA3MCA3MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PHRpdGxlPm1haWwvc3RhdGljL2Rlc2NyaXB0aW9uL2ljb248L3RpdGxlPjxkZWZzPjxwYXRoIGQ9Ik00IDBoNjFjNCAwIDUgMSA1IDV2NjBjMCA0LTEgNS01IDVINGMtMyAwLTQtMS00LTVWNWMwLTQgMS01IDQtNXoiIGlkPSJhIi8+PGxpbmVhckdyYWRpZW50IHgxPSIxMDAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiIGlkPSJjIj48c3RvcCBzdG9wLWNvbG9yPSIjQ0Q3NjkwIiBvZmZzZXQ9IjAlIi8+PHN0b3Agc3RvcC1jb2xvcj0iI0NBNTM3NyIgb2Zmc2V0PSIxMDAlIi8+PC9saW5lYXJHcmFkaWVudD48cGF0aCBkPSJNNTcuNzA2IDM1LjcxYzAgOS4yNzYtMTAuMDEyIDE2Ljc3Ny0yMi4zNTEgMTYuNzc3LTMuNzQ5IDAtNy4yODctLjY5NC0xMC4zOTItMS45Mi0zLjEyNyAyLjUxNy02Ljk2OSA0LjA1Ny0xMS4wNTEgNC40OTNhLjgzNS44MzUgMCAwIDEtLjg5My0uNjIxYy0uMS0uNDA0LjIxLS42NTQuNTEzLS45NTIgMS40OTctMS40ODQgMy4zMTMtMi42NDYgNC4wMjctNy42My0yLjg1NS0yLjgxNS00LjU1NS02LjMzMS00LjU1NS0xMC4xNDYgMC05LjI2NyAxMC4wMTEtMTYuNzc2IDIyLjM1LTE2Ljc3NiAxMi4zNCAwIDIyLjM1MiA3LjUwOSAyMi4zNTIgMTYuNzc2em0tMzMuNjQ3LTYuNTM0YTEgMSAwIDAgMC0xIDF2MS4zNTNhMSAxIDAgMCAwIDEgMWgyMi41ODhhMSAxIDAgMCAwIDEtMXYtMS4zNTNhMSAxIDAgMCAwLTEtMUgyNC4wNnptMCA4LjA1NmExIDEgMCAwIDAtMSAxdjEuMzUzYTEgMSAwIDAgMCAxIDFoMjIuNTg4YTEgMSAwIDAgMCAxLTF2LTEuMzUzYTEgMSAwIDAgMC0xLTFIMjQuMDZ6IiBpZD0iZCIvPjxwYXRoIGQ9Ik01Ny43MDYgMzMuNzFjMCA5LjI3Ni0xMC4wMTIgMTYuNzc3LTIyLjM1MSAxNi43NzctMy43NDkgMC03LjI4Ny0uNjk0LTEwLjM5Mi0xLjkyLTMuMTI3IDIuNTE3LTYuOTY5IDQuMDU3LTExLjA1MSA0LjQ5M2EuODM1LjgzNSAwIDAgMS0uODkzLS42MjFjLS4xLS40MDQuMjEtLjY1NC41MTMtLjk1MiAxLjQ5Ny0xLjQ4NCAzLjMxMy0yLjY0NiA0LjAyNy03LjYzLTIuODU1LTIuODE1LTQuNTU1LTYuMzMxLTQuNTU1LTEwLjE0NiAwLTkuMjY3IDEwLjAxMS0xNi43NzYgMjIuMzUtMTYuNzc2IDEyLjM0IDAgMjIuMzUyIDcuNTA5IDIyLjM1MiAxNi43NzZ6bS0zMy42NDctNi41MzRhMSAxIDAgMCAwLTEgMXYxLjM1M2ExIDEgMCAwIDAgMSAxaDIyLjU4OGExIDEgMCAwIDAgMS0xdi0xLjM1M2ExIDEgMCAwIDAtMS0xSDI0LjA2em0wIDguMDU2YTEgMSAwIDAgMC0xIDF2MS4zNTNhMSAxIDAgMCAwIDEgMWgyMi41ODhhMSAxIDAgMCAwIDEtMXYtMS4zNTNhMSAxIDAgMCAwLTEtMUgyNC4wNnoiIGlkPSJlIi8+PC9kZWZzPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PG1hc2sgaWQ9ImIiIGZpbGw9IiNmZmYiPjx1c2UgeGxpbms6aHJlZj0iI2EiLz48L21hc2s+PGcgbWFzaz0idXJsKCNiKSI+PHBhdGggZmlsbD0idXJsKCNjKSIgZD0iTTAgMEg3MFY3MEgweiIvPjxwYXRoIGQ9Ik00IDFoNjFjMi42NjcgMCA0LjMzMy42NjcgNSAyVjBIMHYzYy42NjctMS4zMzMgMi0yIDQtMnoiIGZpbGw9IiNGRkYiIGZpbGwtb3BhY2l0eT0iLjM4MyIvPjxwYXRoIGQ9Ik0zNi44NDcgNjguNjVMNCA2OWMtMiAwLTQtLjE0Ni00LTQuMDk4VjQ2LjVMMTcuMjg4IDI0IDU0IDI0Ljk1djE3LjkyTDM2Ljg0NyA2OC42NXoiIGZpbGw9IiMzOTM5MzkiIG9wYWNpdHk9Ii4zMjQiLz48cGF0aCBkPSJNNCA2OWg2MWMyLjY2NyAwIDQuMzMzLTEgNS0zdjRIMHYtNGMuNjY3IDIgMiAzIDQgM3oiIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iLjM4MyIvPjx1c2UgZmlsbD0iIzAwMCIgZmlsbC1ydWxlPSJub256ZXJvIiBvcGFjaXR5PSIuMyIgeGxpbms6aHJlZj0iI2QiLz48dXNlIGZpbGw9IiNGRkYiIGZpbGwtcnVsZT0ibm9uemVybyIgeGxpbms6aHJlZj0iI2UiLz48L2c+PC9nPjwvc3ZnPg==" alt="">
                            hello
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 7</h5>
                        <p class="card-text">This is the content of card 7.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card 8</h5>
                        <p class="card-text">This is the content of card 8.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card" style="width: 200px; height: 300px;">
        <img class="card-img-bottom" src="" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

@endsection
