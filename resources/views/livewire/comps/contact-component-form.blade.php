<div class="col-xl-6">
    <div class="send-box">
        @if(session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
        @endif

        <form wire:submit='save' class="custom-form">
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="custom-label" for="exampleFormControlInput1">Full Name</label>
                        <input type="text" name="fullname" class="form-control custom-input"
                            id="exampleFormControlInput1" placeholder="Alex Jordan" wire:model='fullname'>
                        @if($errors->has('fullname'))
                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="custom-label" for="exampleFormControlInput5">Phone</label>
                        <input type="text" name="phone" class="form-control custom-input" id="exampleFormControlInput5"
                            placeholder="Phone" wire:model='phone'>
                        @if($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <label class="custom-label" for="exampleFormControlInput2">Email
                            address</label>
                        <input type="text" name="email" class="form-control custom-input" id="exampleFormControlInput2"
                            placeholder="name@example.com" wire:model='email'>
                        @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="form-group">
                    <label class="custom-label" for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control custom-textarea" name="message" id="exampleFormControlTextarea1"
                        placeholder="Type You message here" wire:model='message'></textarea>
                    @if($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                    @endif
                </div>
            </div>
            {{-- Loading state --}}
            <div wire:loading wire:target="save">
                Processing...
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</div>