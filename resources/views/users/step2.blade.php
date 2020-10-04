<?php 
use App\User;
$datingCount = User::datingProfileExists(Auth::User()['id']);
if ($datingCount==1) {
  $datingCountText = "My Dating Profile";
  $datingCountText2 = "Update Dating Profile below:-";
}else{
  $datingCountText = "Add Dating Profile";
  $datingCountText2 = "Add Dating Profile by filling out the form below:-";
}
$datingProfile = User::datingProfileDetails(Auth::User()['id']);
?>
@extends('layouts.frontLayout.front_design')
@section('content')
    <div id="right_container">
        <div style="padding:20px 15px 30px 15px;">
          <h1>{{ $datingCountText }}</h1>
            <div> <strong> <br />
                {{ $datingCountText2 }} </strong><br />
            </div>
            <div> <br />
                <h6 class="inner">Personal Information</h6>
                <br />
                <form id="datingForm" name="datingForm" action="{{ url('/step/2') }}" method="post" style="width: 600px;">{{ csrf_field() }}
                    @if(!empty($datingProfile->user_id))
                        <input type="hidden" name="user_id" value="{{ $datingProfile->user_id }}">
                    @endif
                    <table width="80%" cellpadding="10" cellspacing="10">                        
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Date of Birth: *</strong></td>
                            <td align="left" valign="top"><input id="dob" name="dob" type="text" size="22" 
                                style="width: 175px;" autocomplete="off" 
                                @if(!empty($datingProfile['dob'])) value="{{ $datingProfile['dob'] }}" @endif/></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Gender: *</strong></td>
                            <td align="left" valign="top">
                                <select name="gender" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>
                                    <option value="Male" @if(!empty($datingProfile['gender']) && $datingProfile['gender']=="Male") selected="" @endif>Male</option>
                                    <option value="Female" @if(!empty($datingProfile['gender']) && $datingProfile['gender']=="Female") selected="" @endif>Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Height: *</strong></td>
                            <td align="left" valign="top">
                                <select name="height" style="width: 187px; height: 24px;">
                                    <option value="">Centimetre</option>
                                    <option value="130" @if(!empty($datingProfile['height']) && $datingProfile['height']=="130") selected="" @endif>130</option>
                                    <option value="131" @if(!empty($datingProfile['height']) && $datingProfile['height']=="131") selected="" @endif>131</option>
                                    <option value="132" @if(!empty($datingProfile['height']) && $datingProfile['height']=="132") selected="" @endif>132</option>
                                    <option value="133" @if(!empty($datingProfile['height']) && $datingProfile['height']=="133") selected="" @endif>133</option>
                                    <option value="134" @if(!empty($datingProfile['height']) && $datingProfile['height']=="134") selected="" @endif>134</option>
                                    <option value="135" @if(!empty($datingProfile['height']) && $datingProfile['height']=="135") selected="" @endif>135</option>
                                    <option value="136" @if(!empty($datingProfile['height']) && $datingProfile['height']=="136") selected="" @endif>136</option>
                                    <option value="137" @if(!empty($datingProfile['height']) && $datingProfile['height']=="137") selected="" @endif>137</option>
                                    <option value="138" @if(!empty($datingProfile['height']) && $datingProfile['height']=="138") selected="" @endif>138</option>
                                    <option value="139" @if(!empty($datingProfile['height']) && $datingProfile['height']=="139") selected="" @endif>139</option>
                                    <option value="140" @if(!empty($datingProfile['height']) && $datingProfile['height']=="140") selected="" @endif>140</option>
                                    <option value="141" @if(!empty($datingProfile['height']) && $datingProfile['height']=="141") selected="" @endif>141</option>
                                    <option value="142" @if(!empty($datingProfile['height']) && $datingProfile['height']=="142") selected="" @endif>142</option>
                                    <option value="143" @if(!empty($datingProfile['height']) && $datingProfile['height']=="143") selected="" @endif>143</option>
                                    <option value="144" @if(!empty($datingProfile['height']) && $datingProfile['height']=="144") selected="" @endif>144</option>
                                    <option value="145" @if(!empty($datingProfile['height']) && $datingProfile['height']=="145") selected="" @endif>145</option>
                                    <option value="146" @if(!empty($datingProfile['height']) && $datingProfile['height']=="146") selected="" @endif>146</option>
                                    <option value="147" @if(!empty($datingProfile['height']) && $datingProfile['height']=="147") selected="" @endif>147</option>
                                    <option value="148" @if(!empty($datingProfile['height']) && $datingProfile['height']=="148") selected="" @endif>148</option>
                                    <option value="149" @if(!empty($datingProfile['height']) && $datingProfile['height']=="149") selected="" @endif>149</option>
                                    <option value="150" @if(!empty($datingProfile['height']) && $datingProfile['height']=="150") selected="" @endif>150</option>
                                    <option value="151" @if(!empty($datingProfile['height']) && $datingProfile['height']=="151") selected="" @endif>151</option>
                                    <option value="152" @if(!empty($datingProfile['height']) && $datingProfile['height']=="152") selected="" @endif>152</option>
                                    <option value="153" @if(!empty($datingProfile['height']) && $datingProfile['height']=="153") selected="" @endif>153</option>
                                    <option value="154" @if(!empty($datingProfile['height']) && $datingProfile['height']=="154") selected="" @endif>154</option>
                                    <option value="155" @if(!empty($datingProfile['height']) && $datingProfile['height']=="155") selected="" @endif>155</option>
                                    <option value="156" @if(!empty($datingProfile['height']) && $datingProfile['height']=="156") selected="" @endif>156</option>
                                    <option value="157" @if(!empty($datingProfile['height']) && $datingProfile['height']=="157") selected="" @endif>157</option>
                                    <option value="158" @if(!empty($datingProfile['height']) && $datingProfile['height']=="158") selected="" @endif>158</option>
                                    <option value="159" @if(!empty($datingProfile['height']) && $datingProfile['height']=="159") selected="" @endif>159</option>
                                    <option value="160" @if(!empty($datingProfile['height']) && $datingProfile['height']=="160") selected="" @endif>160</option>
                                    <option value="161" @if(!empty($datingProfile['height']) && $datingProfile['height']=="161") selected="" @endif>161</option>
                                    <option value="162" @if(!empty($datingProfile['height']) && $datingProfile['height']=="162") selected="" @endif>162</option>
                                    <option value="163" @if(!empty($datingProfile['height']) && $datingProfile['height']=="163") selected="" @endif>163</option>
                                    <option value="164" @if(!empty($datingProfile['height']) && $datingProfile['height']=="164") selected="" @endif>164</option>
                                    <option value="165" @if(!empty($datingProfile['height']) && $datingProfile['height']=="165") selected="" @endif>165</option>
                                    <option value="166" @if(!empty($datingProfile['height']) && $datingProfile['height']=="166") selected="" @endif>166</option>
                                    <option value="167" @if(!empty($datingProfile['height']) && $datingProfile['height']=="167") selected="" @endif>167</option>
                                    <option value="168" @if(!empty($datingProfile['height']) && $datingProfile['height']=="168") selected="" @endif>168</option>
                                    <option value="169" @if(!empty($datingProfile['height']) && $datingProfile['height']=="169") selected="" @endif>169</option>
                                    <option value="170" @if(!empty($datingProfile['height']) && $datingProfile['height']=="170") selected="" @endif>170</option>
                                    <option value="171" @if(!empty($datingProfile['height']) && $datingProfile['height']=="171") selected="" @endif>171</option>
                                    <option value="172" @if(!empty($datingProfile['height']) && $datingProfile['height']=="172") selected="" @endif>172</option>
                                    <option value="173" @if(!empty($datingProfile['height']) && $datingProfile['height']=="173") selected="" @endif>173</option>
                                    <option value="174" @if(!empty($datingProfile['height']) && $datingProfile['height']=="174") selected="" @endif>174</option>
                                    <option value="175" @if(!empty($datingProfile['height']) && $datingProfile['height']=="175") selected="" @endif>175</option>
                                    <option value="176" @if(!empty($datingProfile['height']) && $datingProfile['height']=="176") selected="" @endif>176</option>
                                    <option value="177" @if(!empty($datingProfile['height']) && $datingProfile['height']=="177") selected="" @endif>177</option>
                                    <option value="178" @if(!empty($datingProfile['height']) && $datingProfile['height']=="178") selected="" @endif>178</option>
                                    <option value="179" @if(!empty($datingProfile['height']) && $datingProfile['height']=="179") selected="" @endif>179</option>
                                    <option value="187" @if(!empty($datingProfile['height']) && $datingProfile['height']=="180") selected="" @endif>180</option>
                                    <option value="181" @if(!empty($datingProfile['height']) && $datingProfile['height']=="181") selected="" @endif>181</option>
                                    <option value="182" @if(!empty($datingProfile['height']) && $datingProfile['height']=="182") selected="" @endif>182</option>
                                    <option value="183" @if(!empty($datingProfile['height']) && $datingProfile['height']=="183") selected="" @endif>183</option>
                                    <option value="184" @if(!empty($datingProfile['height']) && $datingProfile['height']=="184") selected="" @endif>184</option>
                                    <option value="185" @if(!empty($datingProfile['height']) && $datingProfile['height']=="185") selected="" @endif>185</option>
                                    <option value="186" @if(!empty($datingProfile['height']) && $datingProfile['height']=="186") selected="" @endif>186</option>
                                    <option value="187" @if(!empty($datingProfile['height']) && $datingProfile['height']=="187") selected="" @endif>187</option>
                                    <option value="188" @if(!empty($datingProfile['height']) && $datingProfile['height']=="188") selected="" @endif>188</option>
                                    <option value="189" @if(!empty($datingProfile['height']) && $datingProfile['height']=="189") selected="" @endif>189</option>
                                    <option value="190" @if(!empty($datingProfile['height']) && $datingProfile['height']=="190") selected="" @endif>190</option>
                                    <option value="191" @if(!empty($datingProfile['height']) && $datingProfile['height']=="191") selected="" @endif>191</option>
                                    <option value="192" @if(!empty($datingProfile['height']) && $datingProfile['height']=="192") selected="" @endif>192</option>
                                    <option value="193" @if(!empty($datingProfile['height']) && $datingProfile['height']=="193") selected="" @endif>193</option>
                                    <option value="194" @if(!empty($datingProfile['height']) && $datingProfile['height']=="194") selected="" @endif>194</option>
                                    <option value="195" @if(!empty($datingProfile['height']) && $datingProfile['height']=="195") selected="" @endif>195</option>
                                    <option value="196" @if(!empty($datingProfile['height']) && $datingProfile['height']=="196") selected="" @endif>196</option>
                                    <option value="197" @if(!empty($datingProfile['height']) && $datingProfile['height']=="197") selected="" @endif>197</option>
                                    <option value="198" @if(!empty($datingProfile['height']) && $datingProfile['height']=="198") selected="" @endif>198</option>
                                    <option value="199" @if(!empty($datingProfile['height']) && $datingProfile['height']=="199") selected="" @endif>199</option>
                                    <option value="200" @if(!empty($datingProfile['height']) && $datingProfile['height']=="200") selected="" @endif>200</option>
                                    <option value="201" @if(!empty($datingProfile['height']) && $datingProfile['height']=="201") selected="" @endif>201</option>
                                    <option value="202" @if(!empty($datingProfile['height']) && $datingProfile['height']=="202") selected="" @endif>202</option>
                                    <option value="203" @if(!empty($datingProfile['height']) && $datingProfile['height']=="203") selected="" @endif>203</option>
                                    <option value="204" @if(!empty($datingProfile['height']) && $datingProfile['height']=="204") selected="" @endif>204</option>
                                    <option value="205" @if(!empty($datingProfile['height']) && $datingProfile['height']=="205") selected="" @endif>205</option>
                                    <option value="206" @if(!empty($datingProfile['height']) && $datingProfile['height']=="206") selected="" @endif>206</option>
                                    <option value="207" @if(!empty($datingProfile['height']) && $datingProfile['height']=="207") selected="" @endif>207</option>
                                    <option value="208" @if(!empty($datingProfile['height']) && $datingProfile['height']=="208") selected="" @endif>208</option>
                                    <option value="209" @if(!empty($datingProfile['height']) && $datingProfile['height']=="209") selected="" @endif>209</option>
                                    <option value="210" @if(!empty($datingProfile['height']) && $datingProfile['height']=="210") selected="" @endif>210</option>
                                    <option value="211" @if(!empty($datingProfile['height']) && $datingProfile['height']=="211") selected="" @endif>211</option>
                                    <option value="213" @if(!empty($datingProfile['height']) && $datingProfile['height']=="212") selected="" @endif>212</option>
                                    <option value="213" @if(!empty($datingProfile['height']) && $datingProfile['height']=="213") selected="" @endif>213</option>
                                    <option value="214" @if(!empty($datingProfile['height']) && $datingProfile['height']=="214") selected="" @endif>214</option>
                                    <option value="215" @if(!empty($datingProfile['height']) && $datingProfile['height']=="215") selected="" @endif>215</option>
                                    <option value="216" @if(!empty($datingProfile['height']) && $datingProfile['height']=="216") selected="" @endif>216</option>
                                    <option value="217" @if(!empty($datingProfile['height']) && $datingProfile['height']=="217") selected="" @endif>217</option>
                                    <option value="218" @if(!empty($datingProfile['height']) && $datingProfile['height']=="218") selected="" @endif>218</option>
                                    <option value="219" @if(!empty($datingProfile['height']) && $datingProfile['height']=="219") selected="" @endif>219</option>
                                    <option value="220" @if(!empty($datingProfile['height']) && $datingProfile['height']=="220") selected="" @endif>220</option>
                                    <option value="221" @if(!empty($datingProfile['height']) && $datingProfile['height']=="221") selected="" @endif>221</option>
                                    <option value="222" @if(!empty($datingProfile['height']) && $datingProfile['height']=="222") selected="" @endif>222</option>
                                    <option value="223" @if(!empty($datingProfile['height']) && $datingProfile['height']=="223") selected="" @endif>223</option>
                                    <option value="224" @if(!empty($datingProfile['height']) && $datingProfile['height']=="224") selected="" @endif>224</option>
                                    <option value="225" @if(!empty($datingProfile['height']) && $datingProfile['height']=="225") selected="" @endif>225</option>
                                    <option value="226" @if(!empty($datingProfile['height']) && $datingProfile['height']=="226") selected="" @endif>226</option>
                                    <option value="227" @if(!empty($datingProfile['height']) && $datingProfile['height']=="227") selected="" @endif>227</option>
                                    <option value="228" @if(!empty($datingProfile['height']) && $datingProfile['height']=="228") selected="" @endif>228</option>
                                    <option value="229" @if(!empty($datingProfile['height']) && $datingProfile['height']=="229") selected="" @endif>229</option>
                                    <option value="230" @if(!empty($datingProfile['height']) && $datingProfile['height']=="230") selected="" @endif>230</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Marital Status: *</strong></td>
                            <td align="left" valign="top">
                                <select name="marital_status" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>                                    
                                    <option value="Single" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Single") selected="" @endif>Single</option>                                    
                                    <option value="Married" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Married") selected="" @endif>Married</option>                                    
                                    <option value="Divorced" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Divorced") selected="" @endif>Divorced</option>                                    
                                    <option value="Widowed" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Widowed") selected="" @endif>Widowed</option>                                    
                                    <option value="Separated" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Separated") selected="" @endif>Separated</option>                                    
                                    <option value="Annulled" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Annulled") selected="" @endif>Annulled</option>                                    
                                    <option value="Other" @if(!empty($datingProfile['marital_status']) && $datingProfile['marital_status']=="Other") selected="" @endif>Other</option>                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Body Type:</strong></td>
                            <td align="left" valign="top">
                                <select name="body_type" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>                                    
                                    <option value="Slim" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Slim") selected="" @endif>Slim</option>                                    
                                    <option value="Average" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Average") selected="" @endif>Average</option>                                    
                                    <option value="Athletic" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Athletic") selected="" @endif>Athletic  </option>                                    
                                    <option value="Heavy" @if(!empty($datingProfile['body_type']) && $datingProfile['body_type']=="Heavy") selected="" @endif>Heavy</option>                                  
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Complexion:</strong></td>
                            <td align="left" valign="top">
                                <select name="complexion" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>                                    
                                    <option value="Light Skin" @if(!empty($datingProfile['complexion']) && $datingProfile['complexion']=="Light Skin") selected="" @endif>Light Skin</option>                                    
                                    <option value="Fair Skin" @if(!empty($datingProfile['complexion']) && $datingProfile['complexion']=="Fair Skin") selected="" @endif>Fair Skin</option>                                    
                                    <option value="Medium Skin" @if(!empty($datingProfile['complexion']) && $datingProfile['complexion']=="Medium Skin") selected="" @endif>Medium Skin  </option>                                    
                                    <option value="Olive Skin" @if(!empty($datingProfile['complexion']) && $datingProfile['complexion']=="Olive Skin") selected="" @endif>Olive Skin</option>                                  
                                    <option value="Tan Brown" @if(!empty($datingProfile['complexion']) && $datingProfile['complexion']=="Tan Brown") selected="" @endif>Tan Brown</option>                                  
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>City:</strong></td>
                            <td align="left" valign="top"><input id="city" name="city" @if(!empty($datingProfile['city'])) 
                                value="{{ $datingProfile['city'] }}" @endif type="text" size="22" 
                                style="width: 175px;" autocomplete="off" /></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Country:</strong></td>
                            <td align="left" valign="top">
                                <select name="country" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>
                                    @foreach($countries as $country)                                    
                                    <option value="{{ $country->country_name }}" @if(!empty($datingProfile['country']) && $datingProfile['country']==$country->country_name) 
                                        selected="" @endif>{{ $country->country_name }}</option>                                    
                                    @endforeach                                 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Languages:</strong></td>
                            <td align="left" valign="top">
                                <select name="languages[]" multiple style="width: 187px; height: 66px;">
                                    <option value="">Select</option>
                                    @foreach($languages as $language)                                    
                                    <option value="{{ $language->name }}" <?php if(!empty($datingProfile->languages) && 
                                    preg_match('/'.$language->name.'/i', $datingProfile->languages)){ echo "selected"; } ?>>{{ $language->name }}</option>                                    
                                    @endforeach                                 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Hobbies:</strong></td>
                            <td align="left" valign="top">
                                <select name="hobbies[]" multiple style="width: 187px; height: 66px;">
                                    <option value="">Select</option>
                                    @foreach($hobbies as $hobby)                                    
                                    <option value="{{ $hobby->title }}" <?php if(!empty($datingProfile->hobbies) && 
                                    preg_match('/'.$hobby->title.'/i', $datingProfile->hobbies)){ echo "selected"; } ?>>{{ $hobby->title }}</option>                                    
                                    @endforeach                                 
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><h6 class="inner">Education & Career</h6></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Highest Education:</strong></td>
                            <td align="left" valign="top"><input id="education" name="education" 
                                @if(!empty($datingProfile['education'])) value="{{ $datingProfile['education'] }}" @endif 
                                type="text" size="22" style="width: 175px;" autocomplete="off" /></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Occupation: </strong></td>
                            <td align="left" valign="top">
                                <select name="occupation" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>
                                    <option value="Student" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Student") selected="" @endif>Student</option>
                                    <option value="Not working" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Not working") selected="" @endif>Not working</option>
                                    <option value="Non-mainstream" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Student") selected="" @endif>Non-mainstream</option>
                                    <option value="Accountant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Accountant") selected="" @endif>Accountant</option>
                                    <option value="Acting" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Acting") selected="" @endif>Acting</option>
                                    <option value="Actor" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Actor") selected="" @endif>Actor</option>
                                    <option value="Administration" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Administration") selected="" @endif>Administration</option>
                                    <option value="Advertising" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Advertising") selected="" @endif>Advertising</option>
                                    <option value="Advocate" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Advocate") selected="" @endif>Advocate</option>
                                    <option value="Air Hostess" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Air Hostess") selected="" @endif>Air Hostess</option>
                                    <option value="Airlines" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Airlines") selected="" @endif>Airlines</option>
                                    <option value="Architect" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Architect") selected="" @endif>Architect</option>
                                    <option value="Artisan" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Artisan") selected="" @endif>Artisan</option>
                                    <option value="Audiologist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Audiologist") selected="" @endif>Audiologist</option>
                                    <option value="Banker" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Banker") selected="" @endif>Banker</option>
                                    <option value="Beautician" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Beautician") selected="" @endif>Beautician</option>
                                    <option value="Biologist/Botanist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Biologist/Botanist") selected="" @endif>Biologist/Botanist</option>
                                    <option value="Business Person" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Business Person") selected="" @endif>Business Person</option>
                                    <option value="Chartered Accountant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Chartered Accountant") selected="" @endif>Chartered Accountant</option>
                                    <option value="Chemist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Chemist") selected="" @endif>Chemist</option>
                                    <option value="Civil Engineer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Civil Engineer") selected="" @endif>Civil Engineer</option>
                                    <option value="Clerical Official" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Clerical Official") selected="" @endif>Clerical Official</option>
                                    <option value="Commercial Pilot" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Commercial Pilot") selected="" @endif>Commercial Pilot</option>
                                    <option value="Company Secretary" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Company Secretary") selected="" @endif>Company Secretary</option>
                                    <option value="Computer Professional" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Computer Professional") selected="" @endif>Computer Professional</option>
                                    <option value="Consultant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Consultant") selected="" @endif>Consultant</option>
                                    <option value="Contractor" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Contractor") selected="" @endif>Contractor</option>
                                    <option value="Cost Accountant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Cost Accountant") selected="" @endif>Cost Accountant</option>
                                    <option value="Creative Person" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Creative Person") selected="" @endif>Creative Person</option>
                                    <option value="Customer Support" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Customer Support") selected="" @endif>Customer Support</option>
                                    <option value="Defence Employee" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Defence Employee") selected="" @endif>Defence Employee</option>
                                    <option value="Dentist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Dentist") selected="" @endif>Dentist</option>
                                    <option value="Designer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Designer") selected="" @endif>Designer</option>
                                    <option value="Doctor" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Doctor") selected="" @endif>Doctor</option>
                                    <option value="Economist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Economist") selected="" @endif>Economist</option>
                                    <option value="Engineer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Engineer") selected="" @endif>Engineer</option>
                                    <option value="Engineer (Mechanical)" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Engineer (Mechanical)") selected="" @endif>Engineer (Mechanical)</option>
                                    <option value="Engineer (Project)" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Engineer (Project)") selected="" @endif>Engineer (Project)</option>
                                    <option value="Entertainment" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Entertainment") selected="" @endif>Entertainment</option>
                                    <option value="Event Manager" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Event Manager") selected="" @endif>Event Manager</option>
                                    <option value="Executive" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Executive") selected="" @endif>Executive</option>
                                    <option value="Factory worker" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Factory worker") selected="" @endif>Factory worker</option>
                                    <option value="Farmer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Farmer") selected="" @endif>Farmer</option>
                                    <option value="Fashion Designer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Fashion Designer") selected="" @endif>Fashion Designer</option>
                                    <option value="Finance" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Finance") selected="" @endif>Finance</option>
                                    <option value="Flight Attendant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Flight Attendant") selected="" @endif>Flight Attendant</option>
                                    <option value="Freelancer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Freelancer") selected="" @endif>Freelancer</option>
                                    <option value="Government Employee" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Government Employee") selected="" @endif>Government Employee</option>
                                    <option value="Health Care" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Health Care") selected="" @endif>Health Care</option>
                                    <option value="Home Maker" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Home Maker") selected="" @endif>Home Maker</option>
                                    <option value="Hotel &amp; Restaurant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Hotel &amp; Restaurant") selected="" @endif>Hotel &amp; Restaurant</option>
                                    <option value="Human Resources" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Human Resources") selected="" @endif>Human Resources</option>
                                    <option value="Interior Designer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Interior Designer") selected="" @endif>Interior Designer</option>
                                    <option value="Investment" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Investment") selected="" @endif>Investment</option>
                                    <option value="IT/Telecom" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="IT/Telecom") selected="" @endif>IT/Telecom</option>
                                    <option value="Journalist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Journalist") selected="" @endif>Journalist</option>
                                    <option value="Lawyer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Lawyer") selected="" @endif>Lawyer</option>
                                    <option value="Lecturer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Lecturer") selected="" @endif>Lecturer</option>
                                    <option value="Legal" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Legal") selected="" @endif>Legal</option>
                                    <option value="Manager" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Manager") selected="" @endif>Manager</option>
                                    <option value="Marketing" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Marketing") selected="" @endif>Marketing</option>
                                    <option value="Media" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Media") selected="" @endif>Media</option>
                                    <option value="Medical" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Medical") selected="" @endif>Medical</option>
                                    <option value="Medical Transcriptionist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Medical Transcriptionist") selected="" @endif>Medical Transcriptionist</option>
                                    <option value="Merchant Naval Officer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Merchant Naval Officer") selected="" @endif>Merchant Naval Officer</option>
                                    <option value="Model" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Model") selected="" @endif>Model</option>
                                    <option value="Nurse" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Nurse") selected="" @endif>Nurse</option>
                                    <option value="Occupational Therapist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Occupational Therapist") selected="" @endif>Occupational Therapist</option>
                                    <option value="Optician" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Optician") selected="" @endif>Optician</option>
                                    <option value="Pharmacist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Pharmacist") selected="" @endif>Pharmacist</option>
                                    <option value="Physician Assistant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Physician Assistant") selected="" @endif>Physician Assistant</option>
                                    <option value="Physicist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Physicist") selected="" @endif>Physicist</option>
                                    <option value="Physiotherapist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Physiotherapist") selected="" @endif>Physiotherapist</option>
                                    <option value="Pilot" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Pilot") selected="" @endif>Pilot</option>
                                    <option value="Politician" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Politician") selected="" @endif>Politician</option>
                                    <option value="Production" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Production") selected="" @endif>Production</option>
                                    <option value="Professor" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Professor") selected="" @endif>Professor</option>
                                    <option value="Psychologist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Psychologist") selected="" @endif>Psychologist</option>
                                    <option value="Public Relations" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Public Relations") selected="" @endif>Public Relations</option>
                                    <option value="Real Estate" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Real Estate") selected="" @endif>Real Estate</option>
                                    <option value="Research Scholar" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Research Scholar") selected="" @endif>Research Scholar</option>
                                    <option value="Retired Person" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Retired Person") selected="" @endif>Retired Person</option>
                                    <option value="Retail" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Retail") selected="" @endif>Retail</option>
                                    <option value="Sales" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Sales") selected="" @endif>Sales</option>
                                    <option value="Scientist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Scientist") selected="" @endif>Scientist</option>
                                    <option value="Self-employed Person" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Self-employed Person") selected="" @endif>Self-employed Person</option>
                                    <option value="Social Worker" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Social Worker") selected="" @endif>Social Worker</option>
                                    <option value="Software Consultant" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Software Consultant") selected="" @endif>Software Consultant</option>
                                    <option value="Software Engineer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Software Engineer") selected="" @endif>Software Engineer</option>
                                    <option value="Sportsman" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Sportsman") selected="" @endif>Sportsman</option>
                                    <option value="Student" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Student") selected="" @endif>Student</option>
                                    <option value="Teacher" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Teacher") selected="" @endif>Teacher</option>
                                    <option value="Technician" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Technician") selected="" @endif>Technician</option>
                                    <option value="Training" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Training") selected="" @endif>Training</option>
                                    <option value="Transportation" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Transportation") selected="" @endif>Transportation</option>
                                    <option value="Veterinary Doctor" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Veterinary Doctor") selected="" @endif>Veterinary Doctor</option>
                                    <option value="Volunteer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Volunteer") selected="" @endif>Volunteer</option>
                                    <option value="Web Designer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Web Designer") selected="" @endif>Web Designer</option>
                                    <option value="Writer" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Writer") selected="" @endif>Writer</option>
                                    <option value="Zoologist" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Zoologist") selected="" @endif>Zoologist</option>
                                    <option value="Other" @if(!empty($datingProfile['occupation']) && $datingProfile['occupation']=="Other") selected="" @endif>Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>Income: </strong></td>
                            <td align="left" valign="top">
                                <select name="income" style="width: 187px; height: 24px;">
                                    <option value="">Select</option>
                                    <option value="Under $25,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="Under $25,000") selected="" @endif>Under $25,000</option>
                                    <option value="$25,001-50,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$25,001-50,000") selected="" @endif>$25,001-50,000</option>
                                    <option value="$50,001-75,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$50,001-75,000") selected="" @endif>$50,001-75,000</option>
                                    <option value="$75,001-100,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$75,001-100,000") selected="" @endif>$75,001-100,000</option>
                                    <option value="$100,001-150,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$100,001-150,000") selected="" @endif>$100,001-150,000</option>
                                    <option value="$150,001-200,000" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$150,001-200,000") selected="" @endif>$150,001-200,000</option>
                                    <option value="$200,001 and above" @if(!empty($datingProfile['income']) && $datingProfile['income']=="$200,001 and above") selected="" @endif>$200,001 and above</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2"><h6 class="inner">About Myself</h6></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong>About Myself: * </strong></td>
                            <td align="left" valign="top">
                                <textarea name="about_myself" style="width: 187px;">@if(!empty($datingProfile['about_myself'])) {{ $datingProfile['about_myself'] }} @endif</textarea>
                            </td>
                        </tr>                        
                        <tr>
                            <td colspan="2"><h6 class="inner">About My Preferred Partner: </h6></td>
                        </tr>
                        <tr>
                            <td align="left" valign="top" class="body"><strong> Partner Details: * </strong></td>
                            <td align="left" valign="top">
                                <textarea name="about_partner" style="width: 187px;">@if(!empty($datingProfile['about_partner'])) {{ $datingProfile['about_partner'] }} @endif</textarea>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" class="button" value="Register Now" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection

@section('title')
  Personal Info
@endsection
