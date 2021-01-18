<form class="mt-4" method="POST" action="{{ route('storeGuideArticle') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label for="name" class="control-label">Article Title</label>
                <input type="text" name="title" class="form-control form-control-lg" placeholder="Something Spookey scary or exciting">
            </div>

            <div class="row mt-3">
                <label for="excerpt" class="control-label">Article Excerpt</label>
                <input type="textarea" name="excerpt" class="form-control form-control-lg mt-3" placeholder="A short snippet from the article">
            </div>
            <hr class="mt-4">

            <div class="row mt-3">
        <label for="heading1" class="control-label">Heading 1</label>
        <input type="textarea" name="heading1" class="form-control form-control-lg mt-3" placeholder="First Header">
    </div>

    <div class="row mt-3">
        <label for="image">Image 1</label>
    </div>
    <div class="row">
            <!-- <label for="title" class="control-label">Article Image</label> -->
            <input type="text" name="image" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>

    <!-- 
    | TODO - later add in the ability on front end and back end to add captions to each image
        -->
    <!-- <div  class="row mt-3">
        <input type="text" name="image_credit" class="form-control form-control-lg mt-3" placeholder="Give credit for image">
    </div> -->

                
    <div class="row mt-3">
        <label for="paragraph1" class="control-label">Paragraph 1</label>
        <textarea name="paragraph1" cols="30" rows="5" name="paragraph1" class="form-control form-control-lg mt-3" placeholder="Paragraph 1"></textarea>
        
    </div>
    <hr class="mt-4">
    <!-- beginning -->
    <div class="row mt-3">
        <label for="heading2" class="control-label">Heading 2</label>
        <input type="textarea" name="heading2" class="form-control form-control-lg mt-3" placeholder="Second Header">
    </div>

    <div class="row mt-3">
        <label for="image2">Image 2</label>
    </div>
    <div class="row">
            <!-- <label for="title" class="control-label">Article Image</label> -->
            <input type="text" name="image2" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                
    <div class="row mt-3">
        <label for="paragraph2" class="control-label">Paragraph 2</label>
        <textarea type="textarea" name="paragraph2" class="form-control form-control-lg mt-3" placeholder="Paragraph 2" cols="30" rows="5"></textarea>
    </div>
    <hr>
    <!-- ending -->

    <!-- // beginning  -->
    <div class="row mt-3">
        <label for="heading3" class="control-label">Heading 3</label>
        <input type="textarea" name="heading3" class="form-control form-control-lg mt-3" placeholder="Third Header">
    </div>

    <div class="row mt-3">
        <label for="image3">Image 3</label>
    </div>
    <div class="row">
            <input type="text" name="image3" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>

    <div class="row mt-3">
        <label for="paragraph3" class="control-label">Paragraph 3</label>
        <textarea type="textarea" name="paragraph3" class="form-control form-control-lg mt-3" placeholder="Paragraph 3" cols="30" rows="5"></textarea>
    </div>
    <hr class="mt-4">
    <!-- // ending  -->

    <!-- // beginning  -->
    <div class="row mt-3">
        <label for="heading4" class="control-label">Heading 4</label>
        <input type="textarea" name="heading4" class="form-control form-control-lg mt-3" placeholder="Fourth Header">
    </div>

    <div class="row mt-3">
        <label for="image4">Image 4</label>
    </div>

    <div class="row">
            <input type="text" name="image4" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                
    <div class="row mt-3">
        <label for="paragraph4" class="control-label">Paragraph 4</label>
        <textarea type="textarea" name="paragraph4" class="form-control form-control-lg mt-3" placeholder="Paragraph 4" cols="30" rows="5"></textarea>
    </div>
    <hr class="mt-4">
    <!-- // ending  -->

    <!-- // beginning  -->
    <div class="row mt-3">
        <label for="heading5" class="control-label">Heading 5</label>
        <input type="textarea" name="heading5" class="form-control form-control-lg mt-3" placeholder="Fifth Header">
    </div>

    <div class="row mt-3">
        <label for="image5">Image 5</label>
    </div>
    <div class="row">
            <input type="text" name="image5" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
    <div class="row mt-3">
        <label for="paragraph5" class="control-label">Paragraph 5</label>
        <textarea type="textarea" name="paragraph5" class="form-control form-control-lg mt-3" placeholder="Paragraph 5" cols="30" rows="5"></textarea>
    </div>
    <hr class="mt-4">
    <!-- // ending  -->

    <!-- // beginning  --> 

    <div id="Heading6" class="row mt-3">
        <label for="heading6" class="control-label">Heading 6</label>
        <input type="textarea" name="heading6" class="form-control form-control-lg mt-3" placeholder="Sixth Header">
    </div>

    <div class="row mt-3">
        <label for="image6">Image 6</label>
    </div>
    <div class="row">
            <input type="text" name="image6" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                
    <div class="row mt-3">
        <label for="paragraph6" class="control-label">Paragraph 6</label>
        <textarea type="textarea" name="paragraph6" class="form-control form-control-lg mt-3" placeholder="Sixth Header" cols="30" rows="5"></textarea>
    </div>

                <!-- // beginning  -->
                <div class="row mt-3">
                <label for="heading7" class="control-label">Heading 7</label>
                <input type="textarea" name="heading7" class="form-control form-control-lg mt-3" placeholder="Seventh Header">
            </div>
        
            <div class="row mt-3">
                <label for="image7">Image 7</label>
            </div>
     <div class="row">
            <input type="text" name="image7" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                     
            <div class="row mt-3">
                <label for="paragraph7" class="control-label">Paragraph 7</label>
                <textarea type="textarea" name="paragraph7" class="form-control form-control-lg mt-3" placeholder="Seventh Header" cols="30" rows="5"></textarea>
            </div>


            <!-- // beginning  -->
            <div class="row mt-3">
                <label for="heading8" class="control-label">Heading 8</label>
                <input type="textarea" name="heading8" class="form-control form-control-lg mt-3" placeholder="Eighth Header">
            </div>
        
            <div class="row mt-3">
                <label for="image8">Image 8</label>
            </div>
    <div class="row">
            <input type="text" name="image8" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                     
            <div class="row mt-3">
                <label for="paragraph8" class="control-label">Paragraph 8</label>
                <textarea type="textarea" name="paragraph8" class="form-control form-control-lg mt-3" placeholder="Eighth Header" cols="30" rows="5"></textarea>
            </div>



            <div class="row mt-3">
                <label for="heading9" class="control-label">Heading 9</label>
                <textarea type="textarea" name="heading9" class="form-control form-control-lg mt-3" placeholder="Ninth Header" cols="30" rows="5"></textarea>
            </div>
        
            <div class="row mt-3">
                <label for="image9">Image 9</label>
            </div>
            <div class="row">
            <input type="text" name="image9" class="form-control form-control-lg" placeholder="A cool image here">    
    </div>
                  
            <div class="row mt-3">
                <label for="paragraph9" class="control-label">Paragraph 9</label>
                <textarea type="textarea" name="paragraph9" class="form-control form-control-lg mt-3" placeholder="Ninth Header" cols="30" rows="5"></textarea>
            </div>


                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Article</button>
                    </div>
                </div>
            </form>
            <!-- <div class="row justify-content-center mt-3">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary" type="submit">
                        <a style="color:white;" href="{{ url('create_normal_article') }} ">
                        Switch to Regular Article 
                        </a>
                    </button>
                </div>
            </div> -->