<nav>
                  <!-- Company -->
                  <div class="form-group">
                            <label class="form-label">Company</label>
                            <input type="text" id="company_name" name="company_name" class="form-control mb-1" value="{{ old('company_name', $user->company_name) }}" />
                        </div>
        
                        
                        <x-input-label for="inputState" :value="__('Distance')" />
                        <select class="Select_buttonClasses__rxXNq select-button" id="distance" name="distance">
                        <option value="{{ old('distance', $user->distance) }}" >{{ old('distance', $user->distance) }} Kilometers</option>
                            <option value="50">50 Kilometers</option>
                            <option value="20">20 Kilometers</option>
                            <option value="10">10 Kilometers</option>
                        </select>
                        <!-- Company Website -->
                        <div class="form-group">
                            <label class="form-label">Company Website</label>
                            <select id="is_company_website" name="is_company_website" class="form-control mb-1">
                                <option value="1" {{ old('is_company_website', $user->is_company_website) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !old('is_company_website', $user->is_company_website) ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
        
                        <!-- Company Size -->
                        <div class="form-group">
                            <label class="form-label">Company Size</label>
                            <select id="company_size" name="company_size" class="form-control mb-1">
                                <option value="Self-employed" {{ old('company_size', $user->company_size) == 'Self-employed' ? 'selected' : '' }}>Self-employed</option>
                                <option value="2-10" {{ old('company_size', $user->company_size) == '2-10' ? 'selected' : '' }}>2-10</option>
                                <option value="11-50" {{ old('company_size', $user->company_size) == '11-50' ? 'selected' : '' }}>11-50</option>
                                <option value="51-200" {{ old('company_size', $user->company_size) == '51-200' ? 'selected' : '' }}>51-200</option>
                                <option value="200+" {{ old('company_size', $user->company_size) == '200+' ? 'selected' : '' }}>200+</option>
                            </select>
                        </div>
                        <div class="text-right mt-3 ">
      <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('profile.edit') }}" class="btn btn-secondary">Cancel</a>
      </div>
      </nav>