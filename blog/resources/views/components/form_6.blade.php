<form class="mt-4" method="POST" action="{{ route('store_list_article') }}" enctype="multipart/form-data">
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
            <div  class="row mt-3">    
                <input type="file" name="image1" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph1" class="control-label">Paragraph 1</label>
                <textarea name="paragraph1" cols="30" rows="5" name="paragraph1" class="form-control form-control-lg mt-3" placeholder="First Header"></textarea>
                
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
            <div  class="row mt-3">
           
                <input type="file" name="image2" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph2" class="control-label">Paragraph 2</label>
                <textarea type="textarea" name="paragraph2" class="form-control form-control-lg mt-3" placeholder="Second Header" cols="30" rows="5"></textarea>
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
            <div  class="row mt-3">
           
                <input type="file" name="image3" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph3" class="control-label">Paragraph 3</label>
                <textarea type="textarea" name="paragraph3" class="form-control form-control-lg mt-3" placeholder="Third Header" cols="30" rows="5"></textarea>
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
            <div  class="row mt-3">
           
                <input type="file" name="image4" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph4" class="control-label">Paragraph 4</label>
                <textarea type="textarea" name="paragraph4" class="form-control form-control-lg mt-3" placeholder="Fourth Header" cols="30" rows="5"></textarea>
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
            <div  class="row mt-3">
           
                <input type="file" name="image5" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph5" class="control-label">Paragraph 5</label>
                <textarea type="textarea" name="paragraph5" class="form-control form-control-lg mt-3" placeholder="Fifth Header" cols="30" rows="5"></textarea>
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
            <div  class="row mt-3">
           
                <input type="file" name="image6" accept=".gif,.jpg,.jpeg,.png,.doc,.docx">
            </div>
                     
            <div class="row mt-3">
                <label for="paragraph6" class="control-label">Paragraph 6</label>
                <textarea type="textarea" name="paragraph6" class="form-control form-control-lg mt-3" placeholder="Sixth Header" cols="30" rows="5"></textarea>
            </div>
        

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Article</button>
                    </div>
                </div>
            </form>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-6">
                    <button class="btn btn-block btn-primary" type="submit">
                        <a style="color:white;" href="{{ url('create_normal_article') }} ">
                        Switch to Regular Article 
                        </a>
                    </button>
                </div>
            </div>