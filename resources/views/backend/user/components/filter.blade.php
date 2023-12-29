<div class="filter mb20">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage"> 
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name="perpage"  class="form-control input-sm perpage filter mr10">
                    @for($i = 20 ; $i<=200; $i+=20)
                    <option value="{{ $i }}"> {{$i}} bản ghi</option>
                    @endfor   
                </select>
                <div class="action">
                    <div class="uk-flex uk-flex-middle">
                        <select name="user_catalogue_id" class="form-control mr10">
                            <option value="0" selected="selected">Chọn nhóm thành viên</option>
                            <option value="1">Quản trị viên</option>
                        </select>    
                        <div class="uk-flex uk-flex-middle uk-flex-space-between ">
                            <div class="input-group">
                                <input 
                                    type="text" 
                                    name="keyword"
                                    id=""
                                    value=""
                                    placeholder="Nhập từ khóa muốn tìm kiếm"
                                    class="form-control">
                            </div>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </span>
                        </div> 
                    </div>
                </div>
            </div>
            <div>
                <a href="{{route('user.create')}}" class="btn btn-danger mb20"><i class="fa fa-plus">Thêm mới thành viên</i></a>
            </div>
        </div>
    </div>    
</div>