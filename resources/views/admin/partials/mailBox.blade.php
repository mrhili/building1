          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">
              @isset( $title ) 
                {{ $title }} 
              @else 
                العنوان غير موجود 
              @endisset
              </h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  @forelse( $contacts as $contact )
                  <tr>
                    <td><input type="checkbox">
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    @if( $contact->name )
                      <td class="mailbox-name"><a href="{{ route('contact.show', $contact->id) }}">{{ $contact->name }}</a></td>

                    @else

                      <td class="mailbox-name"><a href="{{ route('reply.show', $contact->id) }}">{{ $contact->user->name }}</a></td>

                    @endif
                    <td class="mailbox-subject"><b>{{ $contact->subject }}</b></td>
                    <td class="mailbox-subject">{{ $contact->message }}</td>
                    <td class="mailbox-attachment">ملفات غير موجودة</td>
                    <td class="mailbox-date">{{ $contact->created_at }}</td>
                  </tr>

                    @isset( $reply )

                      @foreach( generateReply( $contact->id ) as $rep )

                      <tr class="shouldBeHidden">
                        <td><input type="checkbox"></td>
                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                        <td class="mailbox-star"><a href="{{ route('reply.show', $rep->id) }}">{{ $rep->user->name }}</a></td>
                        <td class="mailbox-subject"><b>{{ $rep->subject }}</b></td>
                        <td class="mailbox-subject">{{ $rep->message }}</td>
                        <td class="mailbox-attachment">ملفات غير موجودة</td>
                        <td class="mailbox-date">{{ $rep->created_at }}</td>
                      </tr>

                      @endforeach

                    @endisset

                    @isset( $messageReplayed )

                      @foreach( generateMessage( $contact->contact_id ) as $mess )

                      <tr class="shouldBeHidden">
                        <td><input type="checkbox"></td>
                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                        <td class="mailbox-star"><a href="{{ route('contact.show', $rep->id) }}">{{ $mess->name }}</a></td>
                        <td class="mailbox-subject"><b>{{ $mess->subject }}</b></td>
                        <td class="mailbox-subject">{{ $mess->message }}</td>
                        <td class="mailbox-attachment">ملفات غير موجودة</td>
                        <td class="mailbox-date">{{ $mess->created_at }}</td>
                      </tr>

                      @endforeach

                    @endisset
                  @empty

                  <tr>
                  
                    <td><h1 class="text-center">لا توجد رسالة</h1></td>

                  </tr>
                  @endforelse
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
              @if( $contacts instanceof \Illuminate\Pagination\LengthAwarePaginator )
                  {{ $contacts->links() }}

              @endif
                <!-- /.pull-right -->
              </div>
            </div>
          </div>