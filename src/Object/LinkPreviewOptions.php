<?php

namespace FSA\Telegram\Object;

class LinkPreviewOptions extends AbstractObject
{
    public ?bool $is_disabled;
    public ?string $url;
    public ?bool $prefer_small_media;
    public ?bool $prefer_large_media;
    public ?bool $show_above_text;    

    public function setIsDisabled(?bool $is_disabled): static
    {
        $this->is_disabled = $is_disabled;

        return $this;
    }

    public function setUrl(?string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function setPreferSmallMedia(?bool $prefer_small_media): static
    {
        $this->prefer_small_media = $prefer_small_media;

        return $this;
    }

    public function setPreferLargeMedia(?bool $prefer_large_media): static
    {
        $this->prefer_large_media = $prefer_large_media;

        return $this;
    }

    public function setShowAboveText(?bool $show_above_text): static
    {
        $this->show_above_text = $show_above_text;

        return $this;
    }
}
