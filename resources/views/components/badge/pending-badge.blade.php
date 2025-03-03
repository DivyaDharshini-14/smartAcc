<style>
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }
        100% {
            background-position: 100% 50%;
        }
    }
    .animated-badge {
        background-size: 200% 100%;
        background-image: linear-gradient(to right, #1565C0, #1E88E5, #42A5F5, #90CAF9);
        animation: gradientMove 3s infinite linear;
    }
</style>

<span class="animated-badge text-white font-bold px-2 py-1 text-xs rounded-lg shadow-md">
        {{$slot}}
    </span>
