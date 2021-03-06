    <div id="mp__options" class="mp__options">
        <h2>Options</h2>
        <h4>Upload MP3 Files</h4>
        <form method="POST" enctype="multipart/form-data" class="mp__options-form">
            <input type="file" id="mp__options-upload-btn" name="mp__options-songs[]" class="mp__options-upload-btn mp__options-upload-btn--hidden" hidden="hidden" multiple>
            <label for="file" id="mp__options-label" class="mp__options-label">Select MP3 Files</label>
            <input type="submit" name="submit" id="mp__options-file-submit" value="Upload" class="mp__options-upload-btn"><br>
            <span id="mp__options-label-caption" class="mp__options-label-caption">No Files Selected</span>
        </form>
        <h4>Select a Theme</h4>
        <select name="themes" id="mp__options-theme-options" class="mp__options-theme-select">
            <option value="default" selected>Default</option>
            <option value="materialistic">Materialistic</option>
            <option value="light">Light</option>
            <option value="black-red">Black and Red</option>
        </select>
        <div class="mp__options-voice-commands">
            <h4>List of Voice Commands: </h4>
            <ul>
                <li>"Skip Song"</li>
                <li>"Previous Song"</li>
                <li>"Play Song"</li>
                <li>"Pause Song"</li>
                <li>"Turn On/Off Shuffle/Repeat"</li>
            </ul>
        </div>
    </div>
    <div class="mp__details">
        <img src="http://via.placeholder.com/150x150" alt="Cover" class="mp__details-art">
        <div class="mp__playing">
            <h3>Now Playing </h3>
            <p id="mp__playing-now" class="mp__playing-now"></p>
            <div class="mp__controls">
                <button id="mp__controls-previous" class="mp__controls-btn" title="Previous Song">
                    <svg class="mp__controls-icon">
                        <use  xlink:href="icons/sprite.svg#icon-previous2"></use>
                    </svg>
                </button>
                <button id="mp__controls-playpause" class="mp__controls-btn" title="Play/Pause">                                
                    <svg class="mp__controls-icon">
                        <use id="playpauseicon"xlink:href="icons/sprite.svg#icon-play3"></use>
                    </svg>
                </button>
                <button id="mp__controls-next" class="mp__controls-btn" title="Next Song">
                    <svg class="mp__controls-icon">
                        <use xlink:href="icons/sprite.svg#icon-next2"></use>
                    </svg>
                </button>
                <button id="mp__controls-shuffle" class="mp__controls-btn" title="Shuffle">
                    <svg class="mp__controls-icon">
                        <use xlink:href="icons/sprite.svg#icon-shuffle"></use>
                    </svg>
                    <input type="checkbox" id="mp__controls-check-shuffle" class="mp__controls-check mp__controls-check-shuffle">
                </button>
                <button id="mp__controls-repeat" class="mp__controls-btn" title="Repeat">
                    <svg class="mp__controls-icon">
                        <use xlink:href="icons/sprite.svg#icon-loop"></use>
                    </svg>
                    <input type="checkbox" id="mp__controls-check-repeat" class="mp__controls-check mp__controls-check-repeat">
                </button>
                <button id="mp__controls-microphone" class="mp__controls-btn" title="Activate/Deactivate Voice (Off By Default) | Check options for a list of commands">
                    <svg class="mp__controls-icon">
                        <use xlink:href="icons/sprite.svg#icon-mic"></use>
                    </svg>
                    <input type="checkbox" id="mp__controls-check-mic" class="mp__controls-check mp__controls-check-mic">
                </button>
            </div>
        </div>
        <div class="mp__song-duration">
            <span id="mp__song-duration-start" class="mp__song-duration-start">00:00</span>
            <input type="range" id="mp__song-duration-bar" class="mp__song-duration-bar"></input>
            <span id="mp__song-duration-end" class="mp__song-duration-end">00:00</span>
        </div>
        <div class="mp__volume">
            <svg class="mp__volume-icon">
                <use id="volumeicon" xlink:href="icons/sprite.svg#icon-volume-low"></use>
            </svg>
            <input type="range" id="mp__volume-slider" class="mp__volume-slider" value="0" min="0" max="100">
            <span id="mp__volume-value" class="mp__volume-value"></span>
        </div>
    </div>
    <div class="mp__playlist">
        <h4>Song List</h4>
        <div id="mp__playlist-items"class="mp__playlist-items">   
        </div>
    </div>
</div>
